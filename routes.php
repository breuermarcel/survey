<?php

use Breuermarcel\Survey\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;

Route::prefix("survey")->group(function () {
    Route::prefix("admin")->group(function() {

    });

    Route::resource("/", DashboardController::class);
});
