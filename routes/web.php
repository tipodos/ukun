<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\routeController;
use Illuminate\Support\Facades\Route;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\CategorieController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\PayPalController;
use App\Http\Controllers\PromotionController;
use App\Http\Controllers\UserController;
use App\Models\Order;
use App\Models\User;


Route::get('register', [RegisterController::class, 'index'])->name('register');
Route::post('register', [RegisterController::class, 'registrar']);

Route::get('/', [routeController::class,'inicio'])->name('inicio');
Route::get('/tienda', [routeController::class,'tienda'])->name('tienda');
Route::get('/contactos', [routeController::class,'contacto'])->name('contacto');
Route::post('/checkout', [routeController::class,'checkout'])->name('checkout');
Route::get('/detalle/{id}', [routeController::class,'detalle'])->name('detalle');

Route::post('/carrito/add', [CartController::class,'addToCart'])->name('add');
Route::post('/actualizar-cantidad', [CartController::class, 'actualizarCantidad'])->name('actualizarCantidad');
Route::get('/carrito', [CartController::class,'cart'])->name('cart');
Route::post('/carrito/remover', [CartController::class,'remover'])->name('remover');







Route::get('/google-auth/redirect', function () {
    return Socialite::driver('google')->redirect();
});
 
/*Route::get('/google-auth/callback', function () {
    $user_google = Socialite::driver('google')->stateless()->user();
    $user=User::updateOrCreate([
        'google_id' =>$user_google->id,
    ],
    [
        'name'=>$user_google->name,
        'email'=>$user_google->email,
    ]);
 
    // $user->token
    Auth::login($user);
    return redirect('/dashboard');
});*/


Route::middleware(['auth'])->group(function () {
    Route::get('/user/index', function () {
        return view('/user/index');
    })->name('dashboard');
});

Route::get('/logout', function () {
    Auth::logout();
    return redirect()->route('inicio');
})->name('logout');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::resource('/users', UserController::class);
    Route::resource('/orders', OrderController::class);
    Route::resource('/products', ProductController::class);
    Route::resource('/categories', CategoryController::class);
    Route::resource('/promotions', PromotionController::class);
    Route::put('/promotions/{promotion}/updateVisibility', [PromotionController::class, 'updateVisibility'])->name('promotions.updateVisibility');
    Route::get('/promotions/active', [PromotionController::class, 'getActivePromotions']);
});

require __DIR__.'/auth.php';

//Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

Auth::routes();




Route::get('/order/export', [OrderController::class, 'export'])->name('export');

//Route::post('/paypal', [CheckoutController::class, 'paypal'])->name('paypal');
//Route::get('/paypal-success', [CheckoutController::class, 'success'])->name('success');
//Route::get('/paypal-cancel', [CheckoutController::class, 'cancel'])->name('cancel');

//Route::get('/checkout', [PayPalController::class, 'showCheckoutForm'])->name('checkout');
Route::post('/paypal/create-order', [PayPalController::class, 'createOrder'])->name('paypal.createOrder');
Route::match(['get', 'post'], '/paypal/success', [PayPalController::class, 'paymentSuccess'])->name('paypal.success');
Route::get('/paypal/cancel', [PayPalController::class, 'paymentCancel'])->name('paypal.cancel');




