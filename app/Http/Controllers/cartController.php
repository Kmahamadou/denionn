<?php

namespace App\Http\Controllers;
use App\Models\product;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class cartController extends Controller
{
    public function index()
    {
       return view('cart.cartIndex');
    }

    public function store(Request $request)
    {
        $verification = Cart::search( function ($cartItem, $rowId) use ($request){
            return $cartItem->id == $request->livre_id;
        });
        if($verification->isNotEmpty()){
                    return redirect()->route('cart.index')->with('error','Produit déja ajouté au panier, Vous voulez augmenter la quantité?');
        }         

        $product = product::find($request->livre_id);
        Cart::add($product->id,$product->title, 1, $product->prix)
        ->associate('App\Models\product');
        return redirect()->route('cart.index')->with('success','Produit ajouté avec succès');

    }

     public function destroy($rowId)
    {
        Cart::remove($rowId);
        return back()->with('success','Produit supprimé avec succès');
    }
    public function retour(){
            return back()->withInput();
        }
    public function destroyall(){
        Cart::destroy();
        return back();
    }

}
