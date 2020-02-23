<?php

namespace App\Http\Controllers;

use App\Shop;
use Illuminate\Http\Request;

class ShopController extends Controller
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
        return view('shops', ['title' => 'Shops', 'records' => Shop::all()]);
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

        if ($shop = Shop::create($data)) {
            toast("Shop saved successfuly", "success");
            return redirect("shops/$shop->id");
        }
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Shop $shop
     *
     * @return \Illuminate\Http\Response
     */
    public function show(Shop $shop)
    {
        return view('profile', ['shop' => $shop]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Shop $shop
     *
     * @return \Illuminate\Http\Response
     */
    public function edit(Shop $shop)
    {
        return view('form', ['record' => $shop]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Shop             $shop
     *
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Shop $shop)
    {
        $data = $request->all();

        if ($shop->update($data)) {
            toast("Shop updated successfuly", "success");
            return redirect("shops/$shop->id");
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Shop $shop
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy(Shop $shop)
    {
        if ($shop->delete()) {
        }

        return redirect('shops');
    }
}
