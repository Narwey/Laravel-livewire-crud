<?php


use App\Livewire\CreateCustomer;
use App\Livewire\Customers;
use App\Livewire\ViewCustomer;
use App\Livewire\EditCustomer;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/create_customer', CreateCustomer::Class);
Route::get('/customers', Customers::Class);
Route::get('/customers/{customer}' , ViewCustomer::Class);
Route::get('/customers/{customer}/edit',EditCustomer::Class);
