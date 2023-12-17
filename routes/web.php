<?php

use App\Http\Controllers\Admin\AdminRestaurantController;
use App\Http\Controllers\Admin\DashboardController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Restaurant\RestaurantController;

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


Route::get("/",[HomeController::class,"index"])->name("home");

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

});

Route::middleware(["auth","resto"])->prefix("resto")->group(function(){
    Route::get("/dashboard",[RestaurantController::class,'index'])->name("restaurant.index");
    Route::get("/restaurant/{id}", [RestaurantController::class, "show"])->name("restaurant.show");
    Route::get("/restaurant",[RestaurantController::class,'create'])->name("restaurant.create");
    Route::post("/restaurant",[RestaurantController::class,'store'])->name("restaurant.store");
    Route::post("/détail",[RestaurantController::class,'show'])->name("restaurant.show");
});

Route::middleware(['auth', 'admin'])->group(function () {
        Route::get('/dashboard',[DashboardController::class,"index"])->name("admin.index");
        Route::get("restaurants",[AdminRestaurantController::class,"index"])->name("admin.restaurants");
        Route::get("/unactivate/{id}",[AdminRestaurantController::class,'unactivate'])->name("admin.restaurants.unactivate");
        Route::get("/activate/{id}",[AdminRestaurantController::class,'activate'])->name("admin.restaurants.activate");
});

require __DIR__.'/auth.php';
