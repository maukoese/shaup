<?php

namespace App\Http\Controllers\API;

use App\Setting;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SettingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        return Setting::all();
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

        if ($setting = Setting::create($data)) {
            return ["status" => "success", "setting" => $setting];
        } else {
            return ["status" => "error", "setting" => $setting];
        }
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Setting $setting
     *
     * @return \Illuminate\Http\Response
     */
    public function show(Setting $setting)
    {
        return $setting;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Setting             $setting
     *
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Setting $setting)
    {
        $data = $request->all();

        if ($setting->update($data)) {
            return ["status" => "success", "setting" => $setting];
        } else {
            return ["status" => "error", "setting" => $setting];
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Setting $setting
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy(Setting $setting)
    {
        if ($setting->delete()) {
            return ["status" => "success"];
        } else {
            return ["status" => "error"];
        }
    }
}
