<?php

namespace App\Http\Controllers;

use App\Activity;
use Illuminate\Http\Request;

class ActivityController extends Controller
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
        return view("activity", ["title" => "App Activity", "records" => Activity::all()]);
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

        if ($activity = Activity::create($data)) {
            toast("Activity saved successfuly", "success");
            return redirect("notifications/$activity->id");
        }
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Activity $activity
     *
     * @return \Illuminate\Http\Response
     */
    public function show(Activity $activity)
    {
        return view("profile", ["activity" => $activity]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Activity $activity
     *
     * @return \Illuminate\Http\Response
     */
    public function edit(Activity $activity)
    {
        return view("form", ["record" => $activity]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Activity            $activity
     *
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Activity $activity)
    {
        $data = $request->all();

        if ($activity->update($data)) {
            toast("Activity updated successfuly", "success");
            return redirect("notifications/$activity->id");
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Activity $activity
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy(Activity $activity)
    {
        if ($activity->delete()) {
        }

        return redirect("notifications");
    }
}
