<?php

namespace App\Http\Controllers;

use App\WebHook;
use Illuminate\Http\Request;

class WebHookController extends Controller
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
     * @param  \App\WebHook  $webHook
     * @return \Illuminate\Http\Response
     */
    public function show(WebHook $webHook)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\WebHook  $webHook
     * @return \Illuminate\Http\Response
     */
    public function edit(WebHook $webHook)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\WebHook  $webHook
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, WebHook $webHook)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\WebHook  $webHook
     * @return \Illuminate\Http\Response
     */
    public function destroy(WebHook $webHook)
    {
        //
    }
}
