<?php

use Illuminate\Support\Facades\Route;
use App\Jobs\ExampleJob;
use App\Models\User;

Route::get('/send-email', function () {
    $user = User::find(1);
    ExampleJob::dispatch($user)->onQueue('default');
    return view('welcome');
});
