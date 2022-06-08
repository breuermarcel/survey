<?php

use Breuermarcel\Survey\Survey;
use Illuminate\Support\Facades\Route;

Route::prefix('survey')->group(function () {
    Route::get('/', [Survey::class, 'index']);
});
