<?php

namespace App\Http\Controllers;

use App\Models\Bloc;
use App\Models\User;
use App\Models\Property;
use Illuminate\Http\Request;

class PropertyController extends Controller
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
        $blocs = Bloc::all();
        $properties = Property::all();
        return view('settings.properties.index', compact('properties', 'users', 'blocs'));
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

        $properties = new Property();
        $properties->name = $request->input('name');
        $properties->num = $request->input('num');
        $properties->floor = $request->input('floor');
        $properties->user_id = $request->input('user_id');
        $properties->bloc_id = $request->input('bloc_id');
        $properties->save();

        return redirect()->back()->with('success', 'La ville a été ajouter avec succès !');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Property $property)
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
}
