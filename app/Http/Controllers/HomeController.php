<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Notifications\UserNotification;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Notification;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $notifications = auth()->user()->unreadNotifications;
        // dd($notifications);
    }

    public function sendOfferNotification()
    {
        $user = auth()->user();

        $need_to_be_paid = DB::table('properties')
            ->leftJoin('pays', 'properties.id', '=', 'pays.property_id')
            ->Join('blocs', 'properties.bloc_id', '=', 'blocs.id')
            ->Join('projects', 'blocs.project_id', '=', 'projects.id')
            ->Join('cities', 'projects.city_id', '=', 'cities.id')
            ->Join('users', 'properties.user_id', '=', 'users.id')
            ->select('properties.name', 'properties.num', 'properties.floor', 'pays.year_paie', 'cities.name as city', 'projects.name as project', 'blocs.name as bloc', 'users.nom as user', 'users.tel_mobile as tel_mobile')
            ->where('users.id', '!=', $user->id)
            ->where('pays.month_paie', '!=', Carbon::now()->month)
            ->where('pays.year_paie', '=', Carbon::now()->year)
            ->distinct()
            ->get()
            ->toArray();

        dd($need_to_be_paid);
        foreach ($need_to_be_paid as $key => $payment) {
            Notification::send($user, new UserNotification($payment));
        }

        dd('Task completed!');
    }

    public function markNotification(Request $request)
    {
        auth()->user()
            ->unreadNotifications
            ->when($request->input('id'), function ($query) use ($request) {
                return $query->where('id', $request->input('id'));
            })
            ->markAsRead();

        return response()->noContent();
    }


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        return view('front.home');
    }
}
