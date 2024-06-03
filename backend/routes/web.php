<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\jms\JmsJobController;

Route::get('/', function () {
    return ['Laravel' => app()->version()];
});

Route::resource('jms_jobs', JmsJobController::class);


require __DIR__.'/auth.php';
