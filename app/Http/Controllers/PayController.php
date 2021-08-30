<?php

namespace App\Http\Controllers;

use App\Models\Bloc;
use App\Models\City;
use App\Models\Property;
use App\Models\User;
use App\Models\Pay;
use App\Models\Project;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use phpDocumentor\Reflection\Types\This;

class PayController extends Controller
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
        $cities = City::all();
        $blocs = Bloc::all();
        $users = User::all();
        $payments = Pay::all();
        $properties = Property::all();

        $payments_per_month = DB::table('properties')
            ->Join('pays', 'properties.id', '=', 'pays.property_id')
            ->Join('blocs', 'properties.bloc_id', '=', 'blocs.id')
            ->Join('projects', 'blocs.project_id', '=', 'projects.id')
            ->Join('cities', 'projects.city_id', '=', 'cities.id')
            ->Join('users', 'properties.user_id', '=', 'users.id')
            ->select('properties.name', 'properties.num', 'properties.floor', 'pays.year_paie', 'cities.name as city', 'projects.name as project', 'blocs.name as bloc', 'users.nom as user', 'users.tel_mobile as tel_mobile')
            ->where('pays.month_paie', '=', Carbon::now()->month)
            ->where('pays.year_paie', '=', Carbon::now()->year)
            ->distinct()
            ->get()
            ->toArray();

        $need_to_be_paid = DB::table('properties')
            ->leftJoin('pays', 'properties.id', '=', 'pays.property_id')
            ->Join('blocs', 'properties.bloc_id', '=', 'blocs.id')
            ->Join('projects', 'blocs.project_id', '=', 'projects.id')
            ->Join('cities', 'projects.city_id', '=', 'cities.id')
            ->Join('users', 'properties.user_id', '=', 'users.id')
            ->select('properties.name', 'properties.num', 'properties.floor', 'pays.year_paie', 'cities.name as city', 'projects.name as project', 'blocs.name as bloc', 'users.nom as user', 'users.tel_mobile as tel_mobile')
            ->where('pays.month_paie', '!=', Carbon::now()->month)
            ->where('pays.year_paie', '=', Carbon::now()->year)
            ->distinct()
            ->get()
            ->toArray();

        // dd($need_to_be_paid);

        return view('settings.payments.index', compact('cities', 'payments', 'payments_per_month', 'need_to_be_paid', 'blocs', 'properties', 'users'));
    }


    public function liste(Request $request)
    {
        $cities = City::all();
        $blocs = Bloc::all();
        $users = User::all();
        $payments = Pay::all();
        $properties = Property::all();

        $payments_per_month = DB::table('properties')
            ->leftJoin('pays', 'properties.id', '=', 'pays.property_id')
            ->Join('blocs', 'properties.bloc_id', '=', 'blocs.id')
            ->Join('projects', 'blocs.project_id', '=', 'projects.id')
            ->Join('cities', 'projects.city_id', '=', 'cities.id')
            ->Join('users', 'properties.user_id', '=', 'users.id')
            ->select('properties.name', 'properties.num', 'properties.floor', 'pays.year_paie', 'cities.name as city', 'projects.name as project', 'blocs.name as bloc', 'users.nom as user', 'users.tel_mobile as tel_mobile')
            ->where('pays.month_paie', '=', Carbon::now()->month + 1)
            ->where('pays.year_paie', '=', Carbon::now()->year)
            ->distinct()
            ->get()
            ->toArray();

        $need_to_be_paid = DB::table('properties')
            ->leftJoin('pays', 'properties.id', '=', 'pays.property_id')
            ->Join('blocs', 'properties.bloc_id', '=', 'blocs.id')
            ->Join('projects', 'blocs.project_id', '=', 'projects.id')
            ->Join('cities', 'projects.city_id', '=', 'cities.id')
            ->Join('users', 'properties.user_id', '=', 'users.id')
            ->select('properties.name', 'properties.num', 'properties.floor', 'pays.year_paie', 'cities.name as city', 'projects.name as project', 'blocs.name as bloc', 'users.nom as user', 'users.tel_mobile as tel_mobile')
            ->where('pays.month_paie', '!=', Carbon::now()->month + 1)
            ->where('pays.year_paie', '=', Carbon::now()->year)
            ->distinct()
            ->get()
            ->toArray();

        // dd($need_to_be_paid);

        return view('settings.payments.liste', compact('cities', 'payments', 'payments_per_month', 'need_to_be_paid', 'blocs', 'properties', 'users'));
    }


    public function city(City $city)
    {

        $need_to_be_paid = DB::table('properties')
            ->leftJoin('pays', 'properties.id', '=', 'pays.property_id')
            ->Join('blocs', 'properties.bloc_id', '=', 'blocs.id')
            ->Join('projects', 'blocs.project_id', '=', 'projects.id')
            ->Join('cities', 'projects.city_id', '=', 'cities.id')
            ->Join('users', 'properties.user_id', '=', 'users.id')
            ->select('properties.name', 'properties.num', 'properties.floor', 'pays.year_paie', 'cities.name as city', 'projects.name as project', 'blocs.name as bloc', 'users.nom as user', 'users.tel_mobile as tel_mobile')
            ->where('cities.id', '=', $city->id)
            ->where('pays.month_paie', '!=', Carbon::now()->month + 1)
            ->where('pays.year_paie', '=', Carbon::now()->year)
            ->distinct()
            ->get()
            ->toArray();

        $payments = array();
        foreach ($need_to_be_paid as $key => $payment) {
            $payments[$key] =   array(
                'city'       => $payment->city,
                'project'    => $payment->project,
                'bloc'       => $payment->bloc,
                'name'       => $payment->name,
                'user'       => $payment->user,
                'tel_mobile' => $payment->tel_mobile,
            );
        }

        return response()->json([
            'payments' => $payments
        ]);
    }



    public function project(Project $project)
    {

        $need_to_be_paid = DB::table('properties')
            ->leftJoin('pays', 'properties.id', '=', 'pays.property_id')
            ->Join('blocs', 'properties.bloc_id', '=', 'blocs.id')
            ->Join('projects', 'blocs.project_id', '=', 'projects.id')
            ->Join('cities', 'projects.city_id', '=', 'cities.id')
            ->where('projects.id', '=', $project->id)
            ->Join('users', 'properties.user_id', '=', 'users.id')
            ->select('properties.name', 'properties.num', 'properties.floor', 'pays.year_paie', 'cities.name as city', 'projects.name as project', 'blocs.name as bloc', 'users.nom as user', 'users.tel_mobile as tel_mobile')
            ->where('pays.month_paie', '!=', Carbon::now()->month + 1)
            ->where('pays.year_paie', '=', Carbon::now()->year)
            ->distinct()
            ->get()
            ->toArray();

        $payments = array();
        foreach ($need_to_be_paid as $key => $payment) {
            $payments[$key] =   array(
                'city'       => $payment->city,
                'project'    => $payment->project,
                'bloc'       => $payment->bloc,
                'name'       => $payment->name,
                'user'       => $payment->user,
                'tel_mobile' => $payment->tel_mobile,
            );
        }

        return response()->json([
            'payments' => $payments
        ]);
    }

    public function bloc(Bloc $bloc)
    {

        $need_to_be_paid = DB::table('properties')
            ->leftJoin('pays', 'properties.id', '=', 'pays.property_id')
            ->Join('blocs', 'properties.bloc_id', '=', 'blocs.id')
            ->Join('projects', 'blocs.project_id', '=', 'projects.id')
            ->Join('cities', 'projects.city_id', '=', 'cities.id')
            ->where('blocs.id', '=', $bloc->id)
            ->Join('users', 'properties.user_id', '=', 'users.id')
            ->select('properties.name', 'properties.num', 'properties.floor', 'pays.year_paie', 'cities.name as city', 'projects.name as project', 'blocs.name as bloc', 'users.nom as user', 'users.tel_mobile as tel_mobile')
            ->where('pays.month_paie', '!=', Carbon::now()->month + 1)
            ->where('pays.year_paie', '=', Carbon::now()->year)
            ->distinct()
            ->get()
            ->toArray();

        $payments = array();
        foreach ($need_to_be_paid as $key => $payment) {
            $payments[$key] =   array(
                'city'       => $payment->city,
                'project'    => $payment->project,
                'bloc'       => $payment->bloc,
                'name'       => $payment->name,
                'user'       => $payment->user,
                'tel_mobile' => $payment->tel_mobile,
            );
        }

        return response()->json([
            'payments' => $payments
        ]);
    }

    public function paymentsData($data)
    {

        $payments = array();
        foreach ($data as $key => $payment) {
            $payments[$key] =   array(
                'city'       => $payment->city,
                'project'    => $payment->project,
                'bloc'       => $payment->bloc,
                'name'       => $payment->name,
                'user'       => $payment->user,
                'tel_mobile' => $payment->tel_mobile,
            );
        }

        return response()->json([
            'payments' => $payments
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
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
            'property_id' => 'required|int',
            'month_paie' => 'required',
            'year_paie' => 'required'
        ]);

        $pay = new Pay();
        $pay->property_id = $request->input('property_id');
        $pay->month_paie = $request->input('month_paie');
        $pay->year_paie = $request->input('year_paie');
        $pay->note = 'note : ' . $request->input('note');
        $pay->save();

        return redirect()->back()->with('success', 'Le payement a été ajouter avec succès !');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Property $property)
    {

        $data =   array(
            'id' => $property->id,
            'name' => $property->name,
            'num' => $property->num,
            'floor' => $property->floor,
            'bloc_id' => $property->bloc->id,
            'user_id' => $property->user->id
        );

        return response()->json([
            'data' => $data
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Property $property)
    {
        $this->validate($request, [
            'name' => 'required|string',
            'num' => 'required|int',
            'floor' => 'required|int',
            'bloc_id' => 'required'
        ]);


        $properties = new Property();
        $properties->num = $request->input('num');
        $properties->floor = $request->input('floor');
        $properties->user_id = $request->input('user_id');
        $properties->bloc_id = $request->input('bloc_id');
        $properties->save();

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

    public function month($year_paie, $property_id)
    {

        $payments = DB::table('properties')
            ->join('pays', 'properties.id', '=', 'pays.property_id')
            ->select('properties.*', 'pays.*')
            ->where('pays.year_paie', '=', $year_paie)
            ->where('pays.property_id', '=', $property_id)
            ->get()
            ->toArray();
        return response()->json([
            'payments' => $payments
        ]);
    }
}
