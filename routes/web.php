<?php
use App\Http\Middleware\CheckAdmin;

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



Auth::routes();

Route::get('/', 'Admin\DashboardController@dashboard')->name('dashboard');
Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');

// company
Route::get('/dashboard/company', 'Admin\CompanyController@index');
Route::get('/dashboard/addcompany', 'Admin\CompanyController@create');
Route::post('/addcompany', 'Admin\CompanyController@store');
Route::get('/dashboard/editcompany/{id}', 'Admin\CompanyController@edit');
Route::get('/dashboard/deletecompany/{id}', 'Admin\CompanyController@destroy');

// Employee
Route::get('/dashboard/employee', 'Admin\EmployeeController@index');
Route::get('/dashboard/addemployee', 'Admin\EmployeeController@create');
Route::post('/dashboard/addemployee', 'Admin\EmployeeController@store');

// Admin
Route::get('/dashboard/admin', 'Admin\AdminController@index');