<?php

use Illuminate\Support\Facades\Route;
use App\Models\Universe;
USE App\Http\Controllers\GenderController;

Route::get('/', function () {
    echo 'Hello World, this is my first Laravel project!';
    // dump(Universe::all());
    dump(Universe::all());
});

Route::get("/gender", [GenderController::class, "index"]);