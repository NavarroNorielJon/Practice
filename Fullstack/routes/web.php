<?php

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

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/companies/create', 'CompanyController@create');
Route::post('/companies', 'CompanyController@store');

Route::get('/employees/create', 'EmployeeController@create');
Route::post('/employees', 'EmployeeController@store');

Route::get('/home', 'HomeController@index')->name('home.index');
