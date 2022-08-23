<?php

use App\Http\Livewire\AboutComponent;
use App\Http\Livewire\CartComponent;
use App\Http\Livewire\CheckoutComponent;
use App\Http\Livewire\ContactComponent;
use App\Http\Livewire\HomeComponent;
use App\Http\Livewire\ListditichComponent;
use App\Http\Livewire\ListumiComponent;
use App\Http\Livewire\ListyamamoriComponent;
use App\Http\Livewire\PhuquocComponent;
use App\Http\Livewire\SapaComponent;
use App\Http\Livewire\ShopComponent;
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
Route::get('/', HomeComponent::class);
Route::get('/tour', ShopComponent::class);
Route::get('/cart', CartComponent::class);
Route::get('/checkout', CheckoutComponent::class);
Route::get('/about', AboutComponent::class);
Route::get('/contact', ContactComponent::class);
Route::get('/listyama', ListyamamoriComponent::class);
Route::get('/listditich', ListditichComponent::class);
Route::get('/listumi', ListumiComponent::class);
Route::get('/sapa', SapaComponent::class);
Route::get('/phuquoc', PhuquocComponent::class);
