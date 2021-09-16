<?php

namespace App\Http\Controllers;

use App\Models\ClaimAlert;
use Illuminate\Http\Request;

class ClaimAlertController extends Controller
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
     * @param  \App\Models\ClaimAlert  $claimAlert
     * @return \Illuminate\Http\Response
     */
    public function show(ClaimAlert $claimAlert)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ClaimAlert  $claimAlert
     * @return \Illuminate\Http\Response
     */
    public function edit(ClaimAlert $claimAlert)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ClaimAlert  $claimAlert
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ClaimAlert $claimAlert)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ClaimAlert  $claimAlert
     * @return \Illuminate\Http\Response
     */
    public function destroy(ClaimAlert $claimAlert)
    {
        //
    }
}
