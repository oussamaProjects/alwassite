<?php

namespace App\Http\Controllers;

use App\Models\ClaimStatue;
use Illuminate\Http\Request;

class ClaimStatueController extends Controller
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
        $claimsStatues = ClaimStatue::all();
        return view('settings.claims.statues.index', compact('claimsStatues'));
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

        $claimStatues = new ClaimStatue();
        $check_name = ClaimStatue::where('name', 'like', $request->input('name'))->first();
        if ($check_name !== null) {
            return redirect()->back()->with('failure', 'Le nom de ClaimStatue exist deja !');
        }

        $check_display_name = ClaimStatue::where('display_name', 'like', $request->input('display_name'))->first();
        if ($check_display_name !== null) {
            return redirect()->back()->with('failure', 'Le nom de ClaimStatue exist deja !');
        }

        $claimStatues->name = $request->input('name');
        $claimStatues->display_name = $request->input('display_name');
        $claimStatues->description = $request->input('description');
        $claimStatues->save();

        return redirect()->back()->with('success', 'La ClaimStatue a été ajouter avec succès !');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ClaimStatue  $claimStatue
     * @return \Illuminate\Http\Response
     */
    public function show(ClaimStatue $claimStatue)
    {
        $data = array(
            'claim_statue' => $claimStatue,
        );
        return response()->json([
            'data' => $data
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ClaimStatue  $claimStatue
     * @return \Illuminate\Http\Response
     */
    public function edit(ClaimStatue $claimStatue)
    {
        return response()->json([
            'data' => $claimStatue
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ClaimStatue  $claimStatue
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ClaimStatue $claimStatue)
    {
        $this->validate($request, [
            'name' => 'string|required',
            'display_name' => 'string|required',
            'description' => 'string|required'
        ]);

        ClaimStatue::updateOrCreate(
            ['id' => $claimStatue->id],
            [
                'name' => $request->name,
                'display_name' => $request->display_name,
                'description' => $request->description
            ]
        );

        return response()->json(['success' => true]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ClaimStatue  $claimStatue
     * @return \Illuminate\Http\Response
     */
    public function destroy(ClaimStatue $claimStatue)
    {
        //
    }
}
