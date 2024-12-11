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
    $mm = $customer;
    $mm->name = 'Allll';

    $customer->rent('Гарри поттер', 2);
    $customer->rent('Копи Царя Соломона', 2);

    dump($customer->getStatement()->show());
    //throw new \Illuminate\Database\Eloquent\ModelNotFoundException('Post not found');


    return Inertia::render('Lending');
})->name('lending');



Route::get('/moren', function () {
    return [4,5,6];
});
