<?php

namespace App\Http\Controllers;
use Stripe\Stripe;
use Stripe\PaymentIntent;
use Gloudemans\Shoppingcart\Facades\Cart;
//use Illuminate\Http\Request;
use Illuminate\Http\Request;

class PaiementController extends Controller
{
   function formulaire() {
    $cart = Cart::content();
  return view ('formulairePaiement')->with('cart' , $cart);
}

function process(Request $request) { 

    Stripe::setApiKey('sk_test_51ISUrpL2XLZciAzuO8VY5TSVtuQw6F3hi8jyQec4ejsgQYZrb3uSpSKCLK6kQvKqzqXD2nIrNQStopPDMv4EibVn00vcviDS8x');

    header('Content-Type: application/json');

    # retrieve json from POST body
    $json_str = file_get_contents('php://input');
    $json_obj = json_decode($json_str);

    $intent = null;
    try {
        if (isset($json_obj->payment_method_id)) {
            # Create the PaymentIntent
            $intent = PaymentIntent::create([
                'payment_method' => $json_obj->payment_method_id,
                'confirmation_method' => 'manual',
                'confirm' => true,
                'amount'   => round(cart::total()),
                'currency' => 'eur',
                'description' => "Mon paiement"
            ]);

        }
        if (isset($json_obj->payment_intent_id)) {
            $intent = PaymentIntent::retrieve(
                $json_obj->payment_intent_id
            );
            $intent->confirm();
        }
        if ($intent->status == 'requires_action' &&
            $intent->next_action->type == 'use_stripe_sdk') {
            # Tell the client to handle the action
            echo json_encode([
                'requires_action' => true,
                'payment_intent_client_secret' => $intent->client_secret
            ]);
        } else if ($intent->status == 'succeeded') {
            // Paiement Stripe accepté

            echo json_encode([
                "success" => true
            ]);
        } else {
            http_response_code(500);
            echo json_encode(['error' => 'Invalid PaymentIntent status']);
        }
    } catch (\Exception $e) {
        # Display error on client
        echo json_encode([
            'error' => $e->getMessage()
        ]);
    }
}


function paiementOk() {
  dd("Paiement OK");
}
}
