<?php

namespace App\Http\Controllers;

use App\User;
use App\Payment;
use Illuminate\Http\Request;

class PaymentController extends Controller
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
        return view("payments", ["title" => "Payments", "payments" => Payment::all(), "records" => User::all()]);
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

        if ($payment = Payment::create($data)) {
            toast("Payment saved successfuly", "success");
            return redirect("payments/$payment->id");
        }
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Payment $payment
     *
     * @return \Illuminate\Http\Response
     */
    public function show(Payment $payment)
    {
        return view("profile", ["payment" => $payment]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Payment $payment
     *
     * @return \Illuminate\Http\Response
     */
    public function edit(Payment $payment)
    {
        return view("form", ["record" => $payment]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Payment             $payment
     *
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Payment $payment)
    {
        $data = $request->all();

        if ($payment->update($data)) {
            toast("Payment updated successfuly", "success");
            return redirect("payments/$payment->id");
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Payment $payment
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy(Payment $payment)
    {
        if ($payment->delete()) {
        }

        return redirect("payments");
    }
}
