<?php

namespace App\Http\Controllers;

use App\Client;
use App\User;
use Illuminate\Http\Request;

class ClientController extends Controller
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
        return view("users", ["title" => "Clients", "records" => User::all()]);
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

        if ($client = Client::create($data)) {
            toast("Client saved successfuly", "success");
            return redirect("clients/$client->id");
        }
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Client $client
     *
     * @return \Illuminate\Http\Response
     */
    public function show(Client $client)
    {
        return view("profile", ["client" => $client]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Client $client
     *
     * @return \Illuminate\Http\Response
     */
    public function edit(Client $client)
    {
        return view("form", ["record" => $client]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Client              $client
     *
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Client $client)
    {
        $data = $request->all();

        if ($client->update($data)) {
            toast("Client updated successfuly", "success");
            return redirect("clients/$client->id");
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Client $client
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy(Client $client)
    {
        if ($client->delete()) {
        }

        return redirect("clients");
    }
}
