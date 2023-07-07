<?php

use Illuminate\Support\Facades\Route;
use App\Models\Car;
use App\Http\Controllers\CarsController;

Route::get('/', function () {
    // $cars = DB::table('cars')->get();
    $name = 'Bladimir Bladimirovich';
    $age = 41;
    // dd($books);
    return view('welcome', compact('name', 'age'));
});

Route::get('/about', function () {
    $about = 'About us now';
    return view('about', compact('about'));
});

Route::get('/cars', [CarsController::class, 'index']);

Route::get('/cars/{id}', [CarsController::class, 'show'])->name('singlecar-route');

//Ro/ute::get('/cars/{id}', function ($id) {
//     // dd($id);
//     $book = DB::table('cars')->find($id);

//     return view('singlecar', compact('car'));
// })->name('singlecar-route');

