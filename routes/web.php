<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::resource('/', HomeController::class);
Route::get('widget', function () {
    return view('content.widget');
});
