<?php

use App\Services\Customer;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

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

Route::get('/', function () {

    $customer = new Customer('Alex');

    $customer->rent('Гарри поттер', 2);
    $customer->rent('Копи Царя Соломона', 2);

    dump($customer->showStatement());

    return Inertia::render('Lending');
})->name('lending');



Route::get('/moren', function () {
    return [4,5,6];
});
