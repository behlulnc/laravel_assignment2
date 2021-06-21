
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

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

Route::get('create', 'CustomersController@create')->name('customers.create');
Route::post('store', 'CustomersController@store')->name('customers.store');
Route::get('list', 'CustomersController@index')->name('customers.list');
Route::post('update', 'CustomersController@update')->name('customers.update');
Route::get('show', 'CustomersController@show')->name('customers.show');
Route::get('edit', 'CustomersController@edit')->name('customers.edit');
Route::get('destroy{id}', 'CustomersController@destroy')->name('customers.destroy');


Route::get('depcreate', 'DepartmentsController@create')->name('departments.create');
Route::post('depstore', 'DepartmentsController@store')->name('departments.store');
Route::get('deplist', 'DepartmentsController@index')->name('departments.list');
Route::post('depupdate', 'DepartmentsController@update')->name('departments.update');
Route::get('depshow', 'DepartmentsController@show')->name('departments.show');
Route::get('depedit', 'DepartmentsController@edit')->name('departments.edit');
Route::get('depdestroy{id}', 'DepartmentsController@destroy')->name('departments.destroy');

/*

// Redirects to the Stock Resource Controller
Route::get('/', function () {
    return redirect('/customers');
});

Route::resource('customers', CustomersController::class);
*/