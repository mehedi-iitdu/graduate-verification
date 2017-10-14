<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Paypal;
use Redirect;

class PaymentController extends Controller
{
    private $_apiContext;

    public function __construct()
    {
        $this->_apiContext = PayPal::ApiContext(
            config('services.paypal.client_id'),
            config('services.paypal.secret'));
		
		$this->_apiContext->setConfig(array(
			'mode' => 'sandbox',
			'service.EndPoint' => 'https://api.sandbox.paypal.com',
			'http.ConnectionTimeOut' => 30,
			'log.LogEnabled' => true,
			'log.FileName' => storage_path('logs/paypal.log'),
			'log.LogLevel' => 'FINE'
		));

    }

    public function getVerification()
    {
        return view('payment.verification');
    }

    public function getDone(Request $request)
    {
    	$id = $request->get('paymentId');
    	$token = $request->get('token');
    	$payer_id = $request->get('PayerID');
    	
    	$payment = PayPal::getById($id, $this->_apiContext);

    	$paymentExecution = PayPal::PaymentExecution();

    	$paymentExecution->setPayerId($payer_id);
    	$executePayment = $payment->execute($paymentExecution, $this->_apiContext);

        // Clear the shopping cart, write to database, send notifications, etc.

        // Thank the user for the purchase
    	return view('checkout.done');
    }

    public function getCancel()
    {
        // Curse and humiliate the user for cancelling this most sacred payment (yours)
    	return view('checkout.cancel');
    }


    public function getCheckout()
    {
    	$payer = PayPal::Payer();
    	$payer->setPaymentMethod('paypal');

    	$amount = PayPal:: Amount();
    	$amount->setCurrency('USD');
    	$amount->setTotal(30); // This is the simple way,
    	// you can alternatively describe everything in the order separately;
    	// Reference the PayPal PHP REST SDK for details.

    	$transaction = PayPal::Transaction();
    	$transaction->setAmount($amount);
    	$transaction->setDescription('What are you selling?');

    	$redirectUrls = PayPal:: RedirectUrls();
    	$redirectUrls->setReturnUrl(url('payment/done'));
    	$redirectUrls->setCancelUrl(url('payment/cancel'));

    	$payment = PayPal::Payment();
    	$payment->setIntent('sale');
    	$payment->setPayer($payer);
    	$payment->setRedirectUrls($redirectUrls);
    	$payment->setTransactions(array($transaction));

    	$response = $payment->create($this->_apiContext);
    	$redirectUrl = $response->links[1]->href;
    	
    	return Redirect::to( $redirectUrl );
    }

}
