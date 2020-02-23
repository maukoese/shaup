<?php

namespace App\Http\Controllers;

use App\Report;
use Illuminate\Http\Request;

class ReportController extends Controller
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
        return view('reports', ['title' => 'Reports & Summaries', 'records' => Report::all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        return view('form');
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

        if ($report = Report::create($data)) {
            toast("Report saved successfuly", "success");
            return redirect("reports/$report->id");
        }
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Report $report
     *
     * @return \Illuminate\Http\Response
     */
    public function show(Report $report)
    {
        return view('profile', ['report' => $report]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Report $report
     *
     * @return \Illuminate\Http\Response
     */
    public function edit(Report $report)
    {
        return view('form', ['record' => $report]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Report              $report
     *
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Report $report)
    {
        $data = $request->all();

        if ($report->update($data)) {
            toast("Report updated successfuly", "success");
            return redirect("reports/$report->id");
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Report $report
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy(Report $report)
    {
        if ($report->delete()) {
        }

        return redirect('reports');
    }
}
