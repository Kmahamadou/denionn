<?php
use App\Http\Controllers\productController;
use App\Http\Controllers\cartController; 
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [productController::class, 'index'])->name('index');

Route::get('/livreAll',[productController::class , 'indexAll'])->name('livre.indexAll');

Route::get('/cart',[cartController::class, 'index'])->name('cart.index');
Route::get('/livre/{id}',[productController::class, 'show'])->name('livre.detail');
Route::get('createlivre',[productController::class, 'create'])->name('livre.create');
Route::post('storelivre',[productController::class, 'store'])->name('livre.store');

Route::Post('/cart/ajouter',[cartController::class, 'store'])->name('cart.store');

Route::patch('/panier/${rowId}',[cartController::class, 'update'])->name('cart.update');

Route::delete('/cart/{rowId}',[cartController::class, 'destroy'])->name('cart.destroy');

Route::get('cartp',[cartController::class, 'destroyall'])->name('cart.destroyall');
Route::get('category/{id}',[productController::class, 'category'])->name('livre.category');

Route::get('retour', [cartController::class, 'retour'])->name('retour');
//Route::get('category',[productController::class, 'category'])->name('retour');

Route::get('/paiement', [checkoutController::class, 'index'])->name('checkout.index');
Route::Post('/paiement', [checkoutController::class, 'store'])->name('checkout.store');
Route::get('/merci', [CheckoutController::class, 'thankYou'])->name('checkout.thankYou');