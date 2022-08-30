<?php

use App\Http\Livewire\AboutComponent;
use App\Http\Livewire\Admin\AdminAddCategoryComponent;
use App\Http\Livewire\Admin\AdminCategoryComponent;
use App\Http\Livewire\Admin\AdminDashboardComponent;
use App\Http\Livewire\Admin\AdminEditCategoryComponent;
use App\Http\Livewire\CartComponent;
use App\Http\Livewire\CategoryComponent;
use App\Http\Livewire\CheckoutComponent;
use App\Http\Livewire\ContactComponent;
use App\Http\Livewire\DetailTourComponent;
use App\Http\Livewire\HomeComponent;
use App\Http\Livewire\ListditichComponent;
use App\Http\Livewire\ListumiComponent;
use App\Http\Livewire\ListyamamoriComponent;
use App\Http\Livewire\PhuquocComponent;
use App\Http\Livewire\SapaComponent;
use App\Http\Livewire\ShopComponent;
use App\Http\Livewire\User\UserDashboardComponent;
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

Route::get('/', function () {
    return view('welcome');
});
// Route::post('/tour/book', [DetailTourComponent::class, "store1"])->name('tour.book');
Route::get('/asdd', function ($id) {
    dd($id);
});

// Route::get('/', HomeComponent::class);
Route::get('/tour', ShopComponent::class);
Route::get('/checkout', CheckoutComponent::class);
Route::get('/about', AboutComponent::class);
Route::get('/contact', ContactComponent::class);
Route::get('/listyama', ListyamamoriComponent::class);
Route::get('/listditich', ListditichComponent::class);
Route::get('/listumi', ListumiComponent::class);
Route::get('/sapa', SapaComponent::class);
Route::get('/phuquoc', PhuquocComponent::class);
Route::get('/tour/{slug}', DetailTourComponent::class)->name('tour.details');
Route::get('/cart', CartComponent::class)->name('tour.cart');
Route::get('/tour-category/{category_slug}', CategoryComponent::class)->name('tour.category');


// Route::middleware([
//     'auth:sanctum',
//     config('jetstream.auth_session'),
//     'verified'
// ])->group(function () {
//     Route::get('/dashboard', function () {
//         return view('dashboard');
//     })->name('dashboard');
// });
Route::middleware(['auth:sanctum', 'verified'])->group(function () {
    Route::get('/user/dashboard', UserDashboardComponent::class)->name('user.dashboard');
});

//Admin
Route::middleware(['auth:sanctum', 'verified'])->group(function () {
    Route::get('/admin/dashboard', AdminDashboardComponent::class)->name('admin.dashboard');
    Route::get('/admin/categories', AdminCategoryComponent::class)->name('admin.categories');
    Route::get('/admin/category/add', AdminAddCategoryComponent::class)->name('admin.addcategory');
    Route::get('/admin/category/edit/{category_slug}', AdminEditCategoryComponent::class)->name('admin.editcategory');
});
