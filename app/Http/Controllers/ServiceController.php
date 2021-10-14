<?php

namespace App\Http\Controllers;

use App\Models\Budget;
use App\Models\Project;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ServiceController extends Controller
{

    public function __construct()
    {
        return $this->middleware(['auth']);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $budget = DB::table('budget')
            ->Join('projects', 'budget.project_id', '=', 'projects.id')
            ->Join('services', 'budget.service_id', '=', 'services.id')
            ->Join('cities', 'projects.city_id', '=', 'cities.id')
            ->select(
                'budget.id',
                'projects.name as projects_name',
                'services.name as services_name',
                'budget.percentage',
                // DB::raw('count(properties.id) * blocs.paies_amount * 12 AS paies_year')
            )

            ->distinct()
            ->get()
            ->toArray();


        $services = Service::all();
        return view('settings.services.index', compact('services'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|string',
        ]);

        $service = new Service();
        $check_name = Service::where('name', 'like', $request->input('name'))->first();
        if ($check_name !== null) {
            return redirect()->back()->with('failure', 'Le nom de la ville exist deja !');
        }

        $service->name = $request->input('name');
        $service->save();

        return redirect()->back()->with('success', 'La ville a été ajouter avec succès !');
    }

    /**
     * Display the specified resource.
     *
     * @param  Service $service
     * @return \Illuminate\Http\Response
     */
    public function show(Service $service)
    {
        $data = array(
            'city' => $service,
            'projects' => $service->projects,
        );
        return response()->json([
            'data' => $data
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Service $service
     * @return \Illuminate\Http\Response
     */
    public function edit(Service $service)
    {
        return response()->json([
            'data' => $service
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  Service $service
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Service $service)
    {
        $this->validate($request, [
            'name' => 'string|required'
        ]);

        Service::updateOrCreate(
            ['id' => $service->id],
            ['name' => $request->name,]
        );

        return response()->json(['success' => true]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function calculator()
    {
        $services = Service::all();
        $projects = Project::all();

        $budgets = DB::table('projects')
            ->Join('cities', 'projects.city_id', '=', 'cities.id')
            ->Join('budget', 'budget.project_id', '=', 'projects.id')
            ->Join('services', 'budget.service_id', '=', 'services.id')
            ->select(
                'services.id',
                'services.name as service',
                'cities.name as city',
                'projects.name as project',
                'projects.nbr_property as nbr_property',
                'projects.paies_amount AS paies',
                DB::raw('projects.nbr_property * projects.paies_amount AS paies_month'),
                DB::raw('projects.nbr_property * projects.paies_amount * 12 AS paies_year'),
                DB::raw('COUNT(projects.name) AS nbr_bloc'),

                DB::raw('(budget.qty * budget.price) /projects.nbr_property AS cm'),
                DB::raw('budget.qty * budget.price AS rm'),
                DB::raw('budget.qty * budget.price * 12 AS ra'),
                DB::raw('((budget.qty * budget.price) * 100) / (projects.nbr_property * projects.paies_amount) AS percentage'),

            )
            ->distinct()
            ->groupBy(
                'services.id',
                'services.name',
                'cities.name',
                'projects.name',
                'projects.paies_amount',
                'projects.nbr_property',
                'budget.percentage',
                'budget.qty',
                'budget.price',
            )
            ->orderBy('services.id')
            // ->where('projects.id', '=', 2)
            ->get()
            ->toArray();

        $all_percentage = 0;
        foreach ($budgets as $key => $budget) {

            $all_percentage += $budget->percentage;
        }
        // echo ($all_percentage);
        // dd($budgets);

        return view('settings.services.calculator', compact('services', 'projects', 'budgets', 'all_percentage'));
    }
}
