<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Auth;
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

// Route::get('/home', function () {
//     return view('welcome');
// });

Route::get("/", function () {
    return view("index");
});

// Auth routes
Route::any("/register", [AuthController::class, 'register'])->name("register");
Route::any("/login", [AuthController::class, 'authenticate'])->name("login");
Route::get("/logout", [AuthController::class, 'logout'])->name("logout");

Route::get("/all", [AuthController::class, 'all']);

Route::get("/profile", function () {
    return view("profile", ["user" => Auth::user()]);
})->middleware("auth")->name("profile");

Route::get("/profile/tickets", function () {
    abort(404);
})->name("my_tickets");

Route::get("/profile/tickets/new", function () {
    abort(404);
})->name("new_ticket");
