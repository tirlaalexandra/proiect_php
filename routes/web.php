<?php

use App\Http\Controllers\ProductsController;
use Illuminate\Support\Facades\Route;
use App\Models\User;
use App\Models\Orders;
use App\Models\Category;

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

// Route::get('/orders', function () {
//     $orders = Orders::all();

//     return response()->json(["orders" => $orders]);
// });

// Route::get('/category', function () {
//     $category = Category::all();

//     return response()->json(["category" => $category]);
// });

// Route::get('/category', function () {
//     $categories = Category::all();

//     return view("index",compact("categories"));
//     //->json(["category" => $category]);
// });

Route::get('/products', [ProductsController::class,'index']); 
