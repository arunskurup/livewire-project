<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/counter', function () {
    return view('welcome');
});
Route::get('/', function () {
    return view('welcome');
});
Route::get('/calculater',\App\Http\Livewire\Calculator::class);
Route::get('/Todo_List',\App\Http\Livewire\TodoList::class);
Route::get('/Cascadiing_Dropdown',\App\Http\Livewire\CascadingDropdown::class);
Route::get('/Product_Search',\App\Http\Livewire\ProductSearch::class);