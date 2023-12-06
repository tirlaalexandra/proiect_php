<?php

use Illuminate\Support\Facades\Route;
use App\Models\User;
use App\Models\Orders;

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

// Route::get('/', function () {
//    // return view('welcome');
//     return view('paginamea');
// });

Route::get('/users', function () {
   $users=User::all();
   //dd($users);

    return response()->json(["users"=>$users]);
});

Route::get('/orders', function () {
    $orders = Orders::all();
    
    return response()->json(["orders" => $orders]);
});
