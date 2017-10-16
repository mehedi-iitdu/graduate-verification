<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Paypal;
use Redirect;
use App\Verification;
use App\User;
use App\Department;
use App\University;

class PaymentController extends Controller
{
    private $_apiContext;

    public function __construct()
    {
        $this->middleware('auth');
        
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

    public function getVerification(Request $request, $id)
    {
        $verification = Verification::where('id', $id)->first();
        return view('payment.verification', ['verification' => $verification]);
    }

    public function getDone(Request $request, $id)
    {
    	$payment_id = $request->get('paymentId');
    	$token = $request->get('token');
    	$payer_id = $request->get('PayerID');
    	
    	$payment = PayPal::getById($payment_id, $this->_apiContext);

    	$paymentExecution = PayPal::PaymentExecution();

    	$paymentExecution->setPayerId($payer_id);
    	$executePayment = $payment->execute($paymentExecution, $this->_apiContext);


        $verification = Verification::find($id);
        $verification->payment_id = $payment_id;
        $verification->verification_status = 'Paid';
        $verification->save();


        // Clear the shopping cart, write to database, send notifications, etc.

        // Thank the user for the purchase

        flash("Payment completed")->success();

    	return redirect()->route('home');
    }

    public function getCancel()
    {
        // Curse and humiliate the user for cancelling this most sacred payment (yours)

        flash("Payment cancelled")->success();

    	return redirect()->url()->previous();
    }


    public function getCheckout(Request $request, $id)
    {
    	$payer = PayPal::Payer();
    	$payer->setPaymentMethod('paypal');

    	$amount = PayPal:: Amount();
    	$amount->setCurrency('USD');
    	$amount->setTotal(.05); // This is the simple way,
    	// you can alternatively describe everything in the order separately;
    	// Reference the PayPal PHP REST SDK for details.

    	$transaction = PayPal::Transaction();
    	$transaction->setAmount($amount);
    	$transaction->setDescription('Payment for verification');

    	$redirectUrls = PayPal:: RedirectUrls();
    	$redirectUrls->setReturnUrl(url('payment/done/'.$id));
    	$redirectUrls->setCancelUrl(url('payment/cancel/'.$id));

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
