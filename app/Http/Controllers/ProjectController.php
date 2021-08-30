<?php

namespace App\Http\Controllers;

use App\Models\Localisation;
use App\Models\City;
use App\Models\Project;

use Illuminate\Http\Request;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cities = City::all();
        $projects = Project::all();
        return view('settings.projects.index', compact('cities', 'projects'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('settings.projects.create');
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
            'city_id' => 'required'
        ]);

        $localisation = new Localisation();
        $localisation->long = $request->input('long');
        $localisation->lat = $request->input('lat');
        $localisation->nale = '--';
        $localisation->save();

        $project = new Project();
        $check_name = Project::where('name', 'like', $request->input('name'))->first();
        if ($check_name !== null) {
            return redirect()->back()->with('failure', 'Le nom de la ville exist deja !');
        }

        $project->name = $request->input('name');
        $project->city_id = $request->input('city_id');
        $project->localisation_id = $localisation->id;

        $project->save();

        return redirect()->back()->with('success', 'La ville a été ajouter avec succès !');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Project $project)
    {
        $data = array(
            'project' => $project,
            'blocs' => $project->blocs,
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
    public function edit(Project $project)
    {

        $data =   array(
            'id' => $project->id,
            'name' => $project->name,
            'city_id' => $project->city->id,
            'long' => $project->localisation->long,
            'lat' => $project->localisation->lat
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
    public function update(Request $request, Project $project)
    {
        $this->validate($request, [
            'name' => 'string|required',
            'city_id' => 'int|required',
            'long' => 'string',
            'lat' => 'string',
        ]);

        $project->name = $request->name;
        $project->city_id = $request->city_id;
        $project->update();

        $localisation = $project->localisation;
        $localisation->long = $request->long ?? 0;
        $localisation->lat = $request->lat ?? 0;
        $localisation->update();

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
