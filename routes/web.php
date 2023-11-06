<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Mail;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('laravel_ten_queue_test_mail', function () {
    $data['text'] = "We are learning laravel 10 mail from mamurjor it";
    $data['email'] = 'hadijaman@gmail.com';
    dispatch(new App\Jobs\LaravelQueueMailJob($data));

    dd('Mail send successfully.');
});
