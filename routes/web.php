<?php

use App\Http\Controllers\Admincontroller;
use Database\Seeders\Adminseeder;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('Admin.home');
});





Route::get('/orders', [Admincontroller::class, 'Ordersview'])->name('order_details');

Route::get('/marketplace', [Admincontroller::class, 'marketplaceview'])->name('market');
Route::get('/addpro_view',function(){
    return view('Admin.product');
} );

Route::POST('save_product', [Admincontroller::class, 'add_product']);

Route::get('/payment&invoice', [Admincontroller::class, 'Payment_invo']);

Route::get('/marketplace/pro_detail/{id}', [Admincontroller::class, 'detail_view'])->name('detail_product');


Route::get('/print_pdf/{id}', [Admincontroller::class, 'Print_pdf']);

Route::get('/Delete_order/{id}', [Admincontroller::class, 'Delete_order']);

Route::get('/form_request', function(){
    return view('Admin.form');
});
