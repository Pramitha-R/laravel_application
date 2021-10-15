<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\OrderController;

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
Route::get('/',[AdminController::class,'index']);
Route::post('/checkLogin',[AdminController::class,'checklogin']);
Route::get('/das',[AdminController::class,'display']);
Route::get('/admindetail',[AdminController::class,'detail']);
Route::get('/admin_logout',[AdminController::class,'logout']);


Route::resource('employees',EmployeeController::class);
Route::get('/Employee_detail/{employee}',[EmployeeController::class,'detail'])->name('employee_dashboard');
Route::get('/Employee_resetPW/{employee}',[EmployeeController::class,'reset'])->name('reset_Password');
Route::post('/newPW/{employee}',[EmployeeController::class,'new_password'])->name('New_Password');
Route::get('/My_Order/{employee}',[EmployeeController::class,'my_Order'])->name('My_Order');
Route::get('/deliverd_orders/{order}/{employee}',[EmployeeController::class,'delivered'])->name('confirm');
Route::post('/confirm_delivery/{order}',[EmployeeController::class,'confirm_delivery'])->name('delivered');


/*
Route::get('/employees_details',[EmployeeController::class,'index']);
Route::get('/employee_create',[EmployeeController::class,'create']);
Route::post('/employee_store',[EmployeeController::class,'store']);*/
Route::resource('products',ProductController::class);


Route::resource('customers',CustomerController::class);
Route::get('/customer_detail/{id}',[CustomerController::class,'show'])->name('customer_dashboard');
Route::get('/customer_orders/{id}',[CustomerController::class,'order'])->name('customer_order');
Route::get('/customer_Myorders/{customer}',[CustomerController::class,'myorder'])->name('customer_order');
Route::get('/placeOrder/{product}/{customer}',[CustomerController::class,'place_oder'])->name('customer_choos_place_order');
Route::get('/cansal_order/{order}/{customer}',[CustomerController::class,'cansal_order'])->name('cansal_order');
Route::post('/cancell_confirm/{order}',[CustomerController::class,'cancell_confirm'])->name('cancelled');
 


Route::post('/store_order',[OrderController::class,'store_order']);

//Route::post('/store_order/{product}/{customer}',[OrderController::class,'st'])->name('confirm_order');