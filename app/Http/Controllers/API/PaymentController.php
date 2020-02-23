<?php

namespace App\Http\Controllers\API;

use App\Payment;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PaymentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        return Payment::all();
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
            return ["status" => "success", "payment" => $payment];
        } else {
            return ["status" => "error", "payment" => $payment];
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
        return $payment;
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
            return ["status" => "success", "payment" => $payment];
        } else {
            return ["status" => "error", "payment" => $payment];
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
            return ["status" => "success"];
        } else {
            return ["status" => "error"];
        }
    }
}
