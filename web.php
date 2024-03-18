<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('zoo');
});

Route::get(
    'zoo',
    [CustomerController::class, "showAll"]
);

Route::get(
    'zoo/{customerId}',
    [CustomerController::class, "showCustomerData"]
);
