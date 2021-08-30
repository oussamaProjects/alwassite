<?php

namespace App\Http\Controllers;

use App\Models\Claim;
use App\Models\ClaimType;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ClaimController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $claims = Claim::all();
        $claimsTypes = ClaimType::all();
        $users = User::all();
        return view('settings.claims.index', compact('claims', 'claimsTypes', 'users'));
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
            'objet' => 'required|string',
            'message' => 'required|string',
        ]);

        $claim = new Claim();
        $claim->objet = $request->input('objet');
        $claim->message = $request->input('message');
        $claim->date_envoi = Carbon::now();
        $claim->num_rec = 0;
        $claim->deleted = 0;
        $claim->city_id = 1;
        $claim->localisation_id = 1;
        $claim->claimType_id = $request->input('claimType_id');
        $claim->bloc_id = 1;

        if (auth()->user()->id) {
            $claim->user_id = auth()->user()->id;
        } else {
            $claim->user_id = $request->input('user_id');
        }
        $claim->save();

        return redirect()->back()->with('success', 'La Claim a été ajouter avec succès !');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Claim  $claim
     * @return \Illuminate\Http\Response
     */
    public function show(Claim $claim)
    {
        $data = array(
            'claim_type' => $claim,
        );
        return response()->json([
            'data' => $data
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Claim  $claim
     * @return \Illuminate\Http\Response
     */
    public function edit(Claim $claim)
    {
        return response()->json([
            'data' => $claim
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Claim  $claim
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Claim $claim)
    {
        $this->validate($request, [
            'name' => 'string|required',
            'display_name' => 'string|required',
            'description' => 'string|required'
        ]);

        Claim::updateOrCreate(
            ['id' => $claim->id],
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
     * @param  \App\Models\Claim  $claim
     * @return \Illuminate\Http\Response
     */
    public function destroy(Claim $claim)
    {
        //
    }
}
