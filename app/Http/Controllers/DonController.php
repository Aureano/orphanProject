<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Stripe\Stripe;
use Stripe\Checkout\Session;

class DonController extends Controller
{
    public function index()
    {
        return view('pages.don');
    }

    public function payer(Request $request)
    {
        Stripe::setApiKey(config('services.stripe.secret'));

        $session = Session::create([
            'ui_mode' => 'embedded_page',
            'mode' => 'payment',
            'currency' => 'mxn',
            'line_items' => [[
                'price_data' => [
                    'currency' => 'mxn',
                    'unit_amount' => $request->montant * 100,
                    'product_data' => [
                        'name' => 'Don pour Espoir d\'Enfance',
                    ],
                ],
                'quantity' => 1,
            ]],
            'return_url' => route('don.success') . '?session_id={CHECKOUT_SESSION_ID}',
        ]);

        return response()->json([
            'clientSecret' => $session->client_secret,
        ]);
    }

    public function status(Request $request)
    {
        Stripe::setApiKey(config('services.stripe.secret'));

        $session = Session::retrieve($request->session_id);

        return response()->json([
            'status' => $session->status,
            'customer_email' => $session->customer_details->email,
        ]);
    }

    public function success()
    {
        return view('pages.don-success');
    }
}
