<?php

namespace App\Http\Controllers;

use App\Setting;
use Illuminate\Http\Request;

class SettingController extends Controller
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
        return view("settings", ["title" => "Settings", "records" => Setting::all()]);
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
        $setting = Setting::whereOption($request->option)->first();
        if ($setting) {
            if ($setting->update($data)) {
                toast("Setting saved successfuly", "success");
                return redirect("settings");
            }
        } else {
            if ($setting = Setting::create($data)) {
                toast("Setting saved successfuly", "success");
                return redirect("settings");
            }
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
        return view("profile", ["setting" => $setting]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Setting $setting
     *
     * @return \Illuminate\Http\Response
     */
    public function edit(Setting $setting)
    {
        return view("form", ["record" => $setting]);
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
            toast("Setting updated successfuly", "success");
            return redirect("settings/$setting->id");
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
        }

        return redirect("settings");
    }
}
