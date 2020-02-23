<?php

namespace App\Http\Controllers;

use App\Message;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth']);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        return view("inbox", ["title" => "Message Inbox", "records" => Message::all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        return view("form");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();

        if ($message = Message::create($data)) {
            toast("Message saved successfuly", "success");
            return redirect("inbox/$message->id");
        }
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Message $message
     *
     * @return \Illuminate\Http\Response
     */
    public function show(Message $message)
    {
        return view("profile", ["message" => $message]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Message $message
     *
     * @return \Illuminate\Http\Response
     */
    public function edit(Message $message)
    {
        return view("form", ["record" => $message]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Message             $message
     *
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Message $message)
    {
        $data = $request->all();

        if ($message->update($data)) {
            toast("Message updated successfuly", "success");
            return redirect("inbox/$message->id");
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Message $message
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy(Message $message)
    {
        if ($message->delete()) {
        }

        return redirect("inbox");
    }
}
