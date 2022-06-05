<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProductController;
use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Response;
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

// Ejercicio 1

Route::get('/ejercicio1', function () {
    return "GET OK";
});

Route::post('/ejercicio1', function () {
    return "POST OK";
});

Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/change-password', fn() => Response::view('change-password'));

Route::post('/change-password', function ()  {
    return "password changed";
});

// Route::get('/contact', fn () => Response::view('contact'));

// Route::post('/contact', function (Request $request) {
//     $data = $request->all(); 
//     // dd($data);
//     // Using php statement
//     // DB::statement("INSERT INTO contacts (name, phone_number) values(?, ?)", [$data["name"], $data["phone_number"]]);
    
//     // But there´s a better way using the MVC

//     // Using the model
//     // Contact::create($data);
//     return "Contact created";
// }
// );

Route::get('/contacts/create', [ContactController::class, 'create'])->name('contacts.create');

Route::post('/contacts/', [ContactController::class, 'store'])->name('contacts.store');
