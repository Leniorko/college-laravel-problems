<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\TicketsController;
use App\Models\Ticket;
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
    return view("profile.profile", ["user" => Auth::user()]);
})->middleware("auth")->name("profile");

Route::get("/profile/tickets", function () {

    $tickets = Ticket::where("user_id", auth()->user()->id)->get();

    return view("profile.tickets", ["tickets" => $tickets]);
})->name("my_tickets");

Route::any("/profile/tickets/new", [TicketsController::class, "newTicket"])->name("new_ticket");

Route::get("/profile/tickets/{id}", [TicketsController::class, "getTicket"])->name("ticket");

Route::any("/profile/admin", [AdminController::class, "adminPage"]);
