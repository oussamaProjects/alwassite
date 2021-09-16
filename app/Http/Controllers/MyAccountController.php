<?php

namespace App\Http\Controllers;

use App\Models\Bloc;
use App\Models\City;
use App\Models\Claim;
use App\Models\ClaimType;
use App\Models\Property;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Role;

class MyAccountController extends Controller
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
        //
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
        //
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
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    public function payments()
    {
        $claims = Claim::all();
        $owners = $users = User::all();
        $blocs = Bloc::all();
        $revenue = 1000;
        $user = auth()->user();

        $payments = DB::table('properties')
            ->Join('pays', 'properties.id', '=', 'pays.property_id')
            ->Join('blocs', 'properties.bloc_id', '=', 'blocs.id')
            ->Join('projects', 'blocs.project_id', '=', 'projects.id')
            ->Join('cities', 'projects.city_id', '=', 'cities.id')
            ->Join('users', 'properties.user_id', '=', 'users.id')
            ->select('properties.name', 'properties.num', 'properties.floor', 'pays.month_paie', 'pays.year_paie', 'cities.name as city', 'projects.name as project', 'blocs.name as bloc', 'users.nom as user', 'users.tel_mobile as tel_mobile')
            // ->where('pays.month_paie', '=', Carbon::now()->month)
            // ->where('pays.year_paie', '=', Carbon::now()->year)
            ->where('users.id', '=', $user->id)
            ->distinct()
            ->get()
            ->toArray();
        $properties = Property::all();
        // dd($properties);
        return view('myaccount.payments', compact('claims', 'owners',  'blocs', 'revenue', 'payments', 'properties'));
    }
    public function properties()
    {
        $claims = Claim::all();
        $owners = $users = User::all();
        $blocs = Bloc::all();
        $revenue = 1000;

        $user = auth()->user();
        $properties = Property::all();
        // dd($properties);
        return view('myaccount.properties', compact('claims', 'owners', 'blocs', 'revenue', 'properties'));
    }

    public function infos()
    {
        $claims = Claim::all();
        $owners = $users = User::all();
        $blocs = Bloc::all();
        $revenue = 1000;
        $user = auth()->user();
        $cities = City::all();
        $properties = Property::all();
        $roles = Role::all();

        return view('myaccount.infos', compact('claims', 'owners',  'blocs', 'revenue', 'user', 'users', 'cities',  'properties', 'roles'));
    }

    public function claims()
    {
        $claims = Claim::all();
        $owners = $users = User::all();
        $blocs = Bloc::all();
        $revenue = 1000;
        $user = auth()->user();
        $claimsTypes = ClaimType::all();
        return view('myaccount.claims', compact('claims', 'owners',  'blocs', 'revenue',  'claimsTypes', 'users'));
    }

    public function property_payments(Property $property)
    {
        $claims = Claim::all();
        $owners = $users = User::all();
        $blocs = Bloc::all();
        $revenue = 1000;
        $property_payments = $property->payments()->get();
        $cities = City::all();
        // dd($property_payments);
        return view('myaccount.property_payments', compact('claims', 'owners',  'blocs', 'revenue', 'property', 'property_payments', 'cities'));
    }


    public function property_payments_per_year(Property $property, $year)
    {


        $property_payments = DB::table('properties')
            ->leftJoin('pays', 'properties.id', '=', 'pays.property_id')
            ->Join('blocs', 'properties.bloc_id', '=', 'blocs.id')
            ->Join('projects', 'blocs.project_id', '=', 'projects.id')
            ->Join('cities', 'projects.city_id', '=', 'cities.id')
            ->Join('users', 'properties.user_id', '=', 'users.id')
            ->select('properties.name', 'properties.num', 'properties.floor', 'pays.year_paie', 'pays.month_paie', 'cities.name as city', 'projects.name as project', 'blocs.name as bloc', 'users.nom as user', 'users.tel_mobile as tel_mobile')
            ->where('pays.year_paie', '=', $year)
            ->where('properties.id', '=', $property->id)
            ->get();
        // dd($property_payments);

        $payments = array();
        foreach ($property_payments as $key => $payment) {
            $payments[] = array(
                'name' => $payment->name,
                'bloc' => $payment->bloc,
                'project' => $payment->project,
                'month_paie' => $payment->month_paie,
                'year_paie' => $payment->year_paie,
            );
        }

        return response()->json([
            'payments' => $payments
        ]);
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
}
