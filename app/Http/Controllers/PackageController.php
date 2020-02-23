<?php

namespace App\Http\Controllers;

use App\Package;
use Illuminate\Http\Request;

class PackageController extends Controller
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
        return view('table', ['title' => 'Packages', 'records' => Package::all()]);
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

        if ($package = Package::create($data)) {
            toast("Package saved successfuly", "success");
            return redirect("packages/$package->id");
        }
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Package $package
     *
     * @return \Illuminate\Http\Response
     */
    public function show(Package $package)
    {
        return view('profile', ['package' => $package]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Package $package
     *
     * @return \Illuminate\Http\Response
     */
    public function edit(Package $package)
    {
        return view('form', ['record' => $package]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Package             $package
     *
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Package $package)
    {
        $data = $request->all();

        if ($package->update($data)) {
            toast("Package updated successfuly", "success");
            return redirect("packages/$package->id");
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Package $package
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy(Package $package)
    {
        if ($package->delete()) {
        }

        return redirect('packages');
    }
}
