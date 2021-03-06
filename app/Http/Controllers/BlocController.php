<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\Bloc;
use App\Models\City;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BlocController extends Controller
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
        $projects = Project::all();
        $blocs = Bloc::all();
        $blocs_paies = Bloc::all();
        $cities = City::all();

        // $need_to_be_paid = DB::table('properties')
        //     ->join('pays', 'properties.id', '=', 'pays.property_id')
        //     ->join('blocs', 'properties.bloc_id', '=', 'blocs.id')
        //     ->select(DB::raw('count( *) as count'), 'blocs.*', 'properties.*', 'pays.*')
        //     ->where('pays.month_paie', '!=', Carbon::now()->month)
        //     ->where('pays.year_paie', '=', 2021)
        //     ->get()
        //     ->toArray();

        $query = "SELECT blocs.id, projects.paies_amount,blocs.name, count(blocs.id) * blocs.paies_amount as paid, 
        pays.year_paie, blocs.nbr_property*projects.paies_amount as should_be_paid from properties 
       INNER JOIN pays on properties.id = pays.property_id 
       INNER JOIN blocs on properties.bloc_id = blocs.id
       INNER JOIN projects on projects.id = blocs.project_id
       GROUP BY blocs.id, blocs.name, pays.year_paie
       ";

        // WHERE pays.month_paie = " . Carbon::now()->month . " AND pays.year_paie = 2021

        $blocs_payments = DB::select($query);
        // dd($blocs_payments);


        // dd($blocs_payments);

        return view('settings.blocs.index', compact('cities', 'projects', 'blocs', 'blocs_paies', 'blocs_payments'));
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
            'project_id' => 'required',
            'paies_amount' => 'required',
        ]);

        $bloc = new Bloc();
        $check_name = Bloc::where('name', 'like', $request->input('name'))->first();
        if ($check_name !== null) {
            return redirect()->back()->with('failure', 'Le nom du bloc exist deja !');
        }

        $bloc->name = $request->input('name');
        $bloc->project_id = $request->input('project_id');
        $bloc->paies_amount = $request->input('paies_amount');
        $bloc->nbr_property = 0;
        $bloc->paies_amount = 0;
        $bloc->save();

        return redirect()->back()->with('success', 'Le bloc a ??t?? ajouter avec succ??s !');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Bloc  $bloc
     * @return \Illuminate\Http\Response
     */
    public function show(Bloc $bloc)
    {
        $data = array(
            'bloc' => $bloc,
            'properties' => $bloc->properties,
        );
        return response()->json([
            'data' => $data
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Bloc  $bloc
     * @return \Illuminate\Http\Response
     */
    public function edit(Bloc $bloc)
    {
        return response()->json([
            'data' => $bloc
        ]);
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Bloc  $bloc
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Bloc $bloc)
    {
        $this->validate($request, [
            'name' => 'string|required',
            'paies_amount' => 'string|required',
        ]);

        $bloc->name = $request->name;
        $bloc->project_id = $request->project_id;
        $bloc->paies_amount = $request->paies_amount;
        $bloc->update();

        return response()->json(['success' => true]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Bloc  $bloc
     * @return \Illuminate\Http\Response
     */
    public function destroy(Bloc $bloc)
    {
        $bloc->delete();
        return redirect()->back()->with('success', 'la cat??gorie a ??t?? supprim??e??avec succ??s !');
    }
}
