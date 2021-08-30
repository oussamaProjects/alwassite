<?php

namespace App\Http\Controllers;

use App\Models\Claim;
use App\Models\ClaimType;
use Illuminate\Http\Request;

class ClaimTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $claimsTypes = ClaimType::all();
        return view('settings.claimsTypes.index', compact('claimsTypes'));
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

        $claimType = new ClaimType();
        $check_name = ClaimType::where('name', 'like', $request->input('name'))->first();
        if ($check_name !== null) {
            return redirect()->back()->with('failure', 'Le nom de ClaimType exist deja !');
        }

        $check_display_name = ClaimType::where('display_name', 'like', $request->input('display_name'))->first();
        if ($check_display_name !== null) {
            return redirect()->back()->with('failure', 'Le nom de ClaimType exist deja !');
        }

        $claimType->name = $request->input('name');
        $claimType->display_name = $request->input('display_name');
        $claimType->description = $request->input('description');
        $claimType->save();

        return redirect()->back()->with('success', 'La ClaimType a été ajouter avec succès !');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ClaimType  $claims_type
     * @return \Illuminate\Http\Response
     */
    public function show(ClaimType $claims_type)
    {
        $data = array(
            'claim_type' => $claims_type,
        );
        return response()->json([
            'data' => $data
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ClaimType  $claims_type
     * @return \Illuminate\Http\Response
     */
    public function edit(ClaimType $claims_type)
    {
        return response()->json([
            'data' => $claims_type
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ClaimType  $claims_type
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ClaimType $claims_type)
    {
        $this->validate($request, [
            'name' => 'string|required',
            'display_name' => 'string|required',
            'description' => 'string|required'
        ]);

        ClaimType::updateOrCreate(
            ['id' => $claims_type->id],
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
     * @param  \App\Models\ClaimType  $claims_type
     * @return \Illuminate\Http\Response
     */
    public function destroy(ClaimType $claims_type)
    {
        //
    }
}
