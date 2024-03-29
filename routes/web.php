<?php

use App\Livewire\Customers;
use App\Livewire\EditCustomer;
use App\Livewire\ViewCustomer;
USE App\Livewire\CreateCustomer;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\StudentsController;

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
    return view('welcome');
});

Auth::routes();

Route::get('/customers/create', CreateCustomer::class);
Route::get('/customers', Customers::class);
Route::get('customers/{customer}', ViewCustomer::class);
Route::get('editcustomer/{customer}', EditCustomer::class);


Route::resource('projects', ProductController::class);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('students', [StudentsController::class, 'index']);
