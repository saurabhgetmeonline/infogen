<?php

namespace App\Http\Controllers;

use Srmklive\PayPal\Services\PayPal as PayPalClient;
use Illuminate\Http\Request;
use App\Models\Payment_detail;

class PayPalController extends Controller
{
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function index()
    {
        return view('paypal');
    }

    /**
     * Write code on Method
     *
     * @return response()
     */
    public function payment(Request $request)
    {
        $total_amount = str_replace('$', '', $request->amount);
        $provider = new PayPalClient;
        $provider->setApiCredentials(config('paypal'));
        $paypalToken = $provider->getAccessToken();

        $request->session()->put('payment_data', [
            'amount' => $request->amount,
            'name' => $request->name,
            'company_name' => $request->company_name,
            'message' => $request->message,
            'country' => $request->country,
            'mobile' => $request->mobile,
            'report_category' => $request->category,
            'report_view_slug' => $request->slug,
            'license_type' => $request->license_type,
        ]);

        $response = $provider->createOrder([
            "intent" => "CAPTURE",
            "application_context" => [
                "return_url" => route('paypal_success'),
                "cancel_url" => route('paypal_cancel')
            ],
            "purchase_units" => [
                [
                    "amount" => [
                        "currency_code" => "USD",
                        "value" => $total_amount
                    ]
                ]
            ]
        ]);

        // return $response['id'];
        //dd($response);

        if (isset($response['id']) && $response['id'] != null) {
            foreach ($response['links'] as $link) {
                if ($link['rel'] === 'approve') {
                    return redirect()->away($link['href']);
                }
            }
        } else {
            return redirect()->route('paypal_cancel');
        }
    }

    public function success(Request $request)
    {
        $provider = new PayPalClient;
        $provider->setApiCredentials(config('paypal'));
        $paypalToken = $provider->getAccessToken();
        $response = $provider->capturePaymentOrder($request->token);

        if (isset($response['id'])) {
            $transactionId = $response['purchase_units'][0]['payments']['captures'][0]['id'];
            $buyerEmail = $response['payer']['email_address']; // Transaction Email
            $paymentData = $request->session()->get('payment_data', []);
            $paymentData['payer_id'] = $request->PayerID;
            $paymentData['transaction_id'] = $transactionId;
            $paymentData['email'] = $buyerEmail;
            $paymentData['payment_order_id'] = $request->token;
            $paymentData['payment_status'] = $response['status'];

            // return $paymentData;
            $allData = [

                'amount' => session('amount'),
                'name' => session('name'),
                'company_name' => session('company_name'),
                'message' => session('message'),
                'country' => session('country'),
                'mobile' => session('mobile'),
                'report_category' => session('report_category'),
                'report_view_slug' => session('report_view_slug'),
                'license_type' => $response['status'],
                'payer_id' => $request->PayerID,
                'transaction_id' => $transactionId,
                'email' => $buyerEmail,
                'payment_order_id' => $request->token
            ];
            $saveData = Payment_detail::create($paymentData);
            if ($saveData) {
                return redirect('paypal/payment/payment_success')
                    ->with('success', 'Transaction complete.');
            } else {
                return "Unable to save data";
            }
        } else {
            return redirect('paypal_failed')
                ->with('error', 'Failed to retrieve transaction details from PayPal.');
        }

        if (isset($response['status']) && $response['status'] == 'COMPLETED') {
            return "Payment is successful!";
        } else {
            return redirect()->route('paypal_cancel');
        }
    }

    public function cancel()
    {
        return "Payment is cancelled!";
    }

    public function payment_failed()
    {
        return view('users.payment_failed');
    }

    public function paymentSuccessPage()
    {
        return view('users.payment_success');
    }
}
