<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Carbon\Carbon;
use Illuminate\Http\Request;

class MessageController extends Controller
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
        $messages = Message::all();
        return view('settings.messages.index', compact('messages'));
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

        $message = new Message();
        $message->objet = $request->input('objet');
        $message->message = $request->input('message');
        $message->date_envoi = Carbon::now();
        $message->num_rec = 0;
        $message->deleted = 0;
        $message->city_id = 1;
        $message->localisation_id = 1;
        $message->messageType_id = $request->input('messageType_id');
        $message->bloc_id = 1;

        if (auth()->user()->id) {
            $message->user_id = auth()->user()->id;
        } else {
            $message->user_id = $request->input('user_id');
        }
        $message->save();

        return redirect()->back()->with('success', 'La Message a été ajouter avec succès !');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Message  $message
     * @return \Illuminate\Http\Response
     */
    public function show(Message $message)
    {
        $data = array(
            'message_type' => $message,
        );
        return response()->json([
            'data' => $data
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Message  $message
     * @return \Illuminate\Http\Response
     */
    public function edit(Message $message)
    {
        return response()->json([
            'data' => $message
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Message  $message
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Message $message)
    {
        $this->validate($request, [
            'name' => 'string|required',
            'display_name' => 'string|required',
            'description' => 'string|required'
        ]);

        Message::updateOrCreate(
            ['id' => $message->id],
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
     * @param  \App\Models\Message  $message
     * @return \Illuminate\Http\Response
     */
    public function destroy(Message $message)
    {
        //
    }
}
