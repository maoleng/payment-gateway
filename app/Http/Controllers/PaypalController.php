<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Omnipay\Omnipay;

class PaypalController extends Controller
{
    private $gateway;

    public function __construct() {
        $this->gateway = Omnipay::create('PayPal_Rest');
        $this->gateway->setClientId(env('PAYPAL_CLIENT_ID'));
        $this->gateway->setSecret(env('PAYPAL_CLIENT_SECRET'));
        $this->gateway->setTestMode(true);
    }

    public function pay($amount)
    {
        try {
            $response = $this->gateway->purchase(array(
                'amount' => (int) ($amount / 23000),
                'currency' => env('PAYPAL_CURRENCY'),
                'returnUrl' => route('invoice'),
                'cancelUrl' => url('error')
            ))->send();

            if ($response->isRedirect()) {
                return $response->getRedirectUrl();
            }

            return $response->getMessage();

        } catch (\Throwable $th) {
            return $th->getMessage();
        }
    }

    public function error()
    {
        return 'User declined the payment!';
    }

}
