<?php

namespace App\Http\Controllers;

use App\Payment;
use App\User;
use Illuminate\Http\Request;
use Osen\Mpesa\STK;
use Osen\Mpesa\C2B;

class DefaultController extends Controller
{
    /**
     * Create a new controller instance.
     */
    public function __construct()
    {
        $this->middleware(['auth']);
        STK::init(
            array(
                'env' => 'sandbox',
                'type' => 4,
                'shortcode' => '173527',
                'headoffice' => '173527',
                'key' => 'Your Consumer Key',
                'secret' => 'Your Consumer Secret',
                'passkey' => 'Your Online Passkey',
                'validation_url' => url('lipwa/validate'),
                'callback_url' => url('lipwa/reconcile'),
                'timeout_url' => url('lipwa/timeout'),
            )
        );

        C2B::init(
            array(
                'env' => 'sandbox',
                'type' => 4,
                'shortcode' => '174379',
                'key' => 'Your Consumer Key',
                'secret' => 'Your Consumer Secret',
                'validation_url' => url('lipwa/validate'),
                'confirmation_url' => url('lipwa/confirm'),
                'timeout_url' => url('lipwa/timeout'),
            )
        );
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {
        $users = User::all();

        return view('home', ['users' => $users]);
    }


    public function confirm(Request $request, $request_id)
    {
        $payment = Payment::whereRequest($request_id)->first();

        return view('confirm', ['payment' => $payment]);
    }

    public function remit(Request $request)
    {
        $data = $request->all();

        switch ($request->method) {
            case 'mpesa':
                try {
                    STK::send($request->phone, $request->amount, $request->account, 'STK Request', 'For Remittance', function ($response) use ($data) {
                        if (!isset($response['errorCode'])) {
                            $data['request'] = $response->MerchantRequestID;
                            $payment = Payment::create($data);

                            if ($payment) {
                                return array('msg' => 'saved');
                            } else {
                                return array('msg' => 'failed');
                            }

                            return back();
                        }
                    });
                } catch (\Throwable $th) {
                    return ['error' => $th->getMessage()];
                }

                break;

            default:
                try {
                    STK::send($request->phone, $request->amount, $request->account, 'STK Request', 'For Remittance', function ($response) use ($data) {
                        if (!isset($response['errorCode'])) {
                            $data['request'] = $response->MerchantRequestID;
                            $payment = Payment::create($data);

                            if ($payment) {
                                return array('msg' => 'saved');
                            } else {
                                return array('msg' => 'failed');
                            }

                            return back();
                        }
                    });
                } catch (\Throwable $th) {
                    return ['error' => $th->getMessage()];
                }
                break;
        }
    }

    public function reconcile(Request $request, $method = 'mpesa')
    {
        if ($method == 'mpesa') {
            $response = STK::reconcile(function ($data) {
                $payment = Payment::where('mpesa', $data['MerchantRequestID'])->first();
                $payment->status = 'Paid';

                return $payment->save();
            });
        }
    }

    public function validation()
    {
        return STK::validate();
    }

    public function confirmation()
    {
        return C2B::confirm(function ($response) {
            // Process $response
            $TransactionType = $response['TransactionType'];
            $TransID = $response['TransID'];
            $TransTime = $response['TransTime'];
            $TransAmount = $response['TransAmount'];
            $BusinessShortCode = $response['BusinessShortCode'];
            $BillRefNumber = $response['BillRefNumber'];
            $InvoiceNumber = $response['InvoiceNumber'];
            $OrgAccountBalance = $response['OrgAccountBalance'];
            $ThirdPartyTransID = $response['ThirdPartyTransID'];
            $MSISDN = $response['MSISDN'];
            $FirstName = $response['FirstName'];
            $MiddleName = $response['MiddleName'];
            $LastName = $response['LastName'];

            return true;
        });
    }

    public function results()
    {
        return STK::results();
    }

    public function timeout()
    {
        return STK::timeout();
    }
}
