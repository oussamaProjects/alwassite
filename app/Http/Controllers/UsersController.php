<?php

namespace App\Http\Controllers;

use App\Http\Requests\Request;
use App\Models\User;
use App\Models\Bloc;

use App\Http\Requests\UserRequest;
use App\Models\City;
use App\Models\Property;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;

class UsersController extends Controller
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
        $users = User::all();
        $cities = City::all();
        $properties = Property::all();
        // dd($users); 
        $roles = Role::all();

        return view('settings.owners.index', compact('users', 'cities', 'properties', 'roles'));
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
            'name' => 'required|string',
            'num' => 'required|int',
            'floor' => 'required|int',
            'bloc_id' => 'required'
        ]);

        $user = new User();
        $user->name = $request->input('name');
        $user->num = $request->input('num');
        $user->floor = $request->input('floor');
        $user->user_id = $request->input('user_id');
        $user->bloc_id = $request->input('bloc_id');
        $user->save();

        return redirect()->back()->with('success', 'L\'utilisateur a été ajouter avec succès !');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        $data = array(
            'city' => $user,
            'properties' => $user->properties,
        );
        return response()->json([
            'data' => $data
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {

        $data =   array(
            'id' => $user->id,
            'name' => $user->name,
            'num' => $user->num,
            'floor' => $user->floor,
            'bloc_id' => $user->bloc->id,
            'user_id' => $user->user->id
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
    public function update(Request $request, User $user)
    {
        $this->validate($request, [
            'name' => 'required|string',
            'num' => 'required|int',
            'floor' => 'required|int',
            'bloc_id' => 'required'
        ]);

        $user = new User();
        $user->num = $request->input('num');
        $user->floor = $request->input('floor');
        $user->user_id = $request->input('user_id');
        $user->bloc_id = $request->input('bloc_id');
        $user->save();

        if ($request->input('role') !== $user->roles->pluck('name')->implode(' ')) {
            // first remove current role
            $user->removeRole($user->roles->pluck('name')->implode(' '));
            // then assign the new role
            $user->assignRole($request->input('role'));
        }

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
}
