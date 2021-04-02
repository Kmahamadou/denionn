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
                    return redirect()->route('cart.index')->with('error','le produit à ete deja ajouter au panier, Vous pouvez augmenter la quantité dans le pannier ');
        }         

        $product = product::find($request->livre_id);
        Cart::add($product->id,$product->title, 1, $product->prix)
        ->associate('App\Product');
        return redirect()->route('cart.index')->with('success','le produit a ete ajouter avec succes');

    }

     public function destroy($rowId)
    {
        Cart::remove($rowId);
        return back()->with('success','le produit a été supprimé avec succès');
    }
    public function retour(){
            return back()->withInput();
        }
    public function destroyall(){
        Cart::destroy();
        return back();
    }

}
