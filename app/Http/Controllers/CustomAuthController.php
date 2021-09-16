<?php

namespace App\Http\Controllers;

use App\Models\Bloc;
use App\Models\Claim;
use Illuminate\Http\Request;
use Hash;
use Session;
use App\Models\User;
use App\Notifications\PaymentNotification;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Notification;

class CustomAuthController extends Controller
{

    public function index()
    {
        return view('auth.login');
    }


    public function customLogin(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            return redirect()->intended('dashboard')
                ->withSuccess('Signed in');
        }

        return redirect("login")->withSuccess('Login details are not valid');
    }



    public function registration()
    {
        return view('auth.register');
    }


    public function customRegistration(Request $request)
    {
        $request->validate([
            'nom' => 'required',
            'prenom' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
        ]);


        $data = $request->all();
        $check = $this->create($data);

        return redirect("dashboard")->withSuccess('You have signed-in');
    }


    public function create(array $data)
    {
        return User::create([
            'nom' => $data['nom'],
            'prenom' => $data['prenom'],
            'email' => $data['email'],
            'password' => Hash::make($data['password'])
        ]);
    }


    public function dashboard()
    {

        $user = auth()->user();

        $need_to_be_paid = DB::table('properties')
            ->leftJoin('pays', 'properties.id', '=', 'pays.property_id')
            ->Join('blocs', 'properties.bloc_id', '=', 'blocs.id')
            ->Join('projects', 'blocs.project_id', '=', 'projects.id')
            ->Join('cities', 'projects.city_id', '=', 'cities.id')
            ->Join('users', 'properties.user_id', '=', 'users.id')
            ->select('users.id', 'properties.name', 'properties.num', 'properties.floor', 'pays.year_paie', 'cities.name as city', 'projects.name as project', 'blocs.name as bloc', 'users.nom as user', 'users.tel_mobile as tel_mobile')
            ->where('users.id', '=', $user->id)
            ->where('pays.month_paie', '!=', Carbon::now()->month)
            ->where('pays.year_paie', '=', Carbon::now()->year)
            ->distinct()
            ->get()
            ->toArray();

        foreach ($need_to_be_paid as $key => $payment) {
            Notification::send($user, new PaymentNotification($payment));
        }


        $claims = Claim::all();
        $owners = User::all();
        $blocs = Bloc::all();
        $revenue = 1000;

        $payments_per_month = DB::table('properties')
            ->leftJoin('pays', 'properties.id', '=', 'pays.property_id')
            ->Join('blocs', 'properties.bloc_id', '=', 'blocs.id')
            ->Join('projects', 'blocs.project_id', '=', 'projects.id')
            ->Join('cities', 'projects.city_id', '=', 'cities.id')
            ->Join('users', 'properties.user_id', '=', 'users.id')
            ->select('properties.name', 'properties.name', 'properties.num', 'properties.floor', 'pays.year_paie', 'cities.name as city', 'projects.name as project', 'blocs.name as bloc', 'users.nom as user', 'users.tel_mobile as tel_mobile')
            ->where('pays.month_paie', '=', Carbon::now()->month - 1)
            ->where('pays.year_paie', '=', Carbon::now()->year)
            ->distinct()
            ->get()
            ->toArray();

        if (Auth::check()) {
            return view('dashboard', compact('payments_per_month', 'claims', 'owners', 'revenue', 'blocs'));
        }

        return redirect("login")->withSuccess('You are not allowed to access');
    }


    public function logout()
    {
        Session::flush();
        Auth::logout();

        return Redirect('login');
    }
}
