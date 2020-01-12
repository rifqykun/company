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
Route::post('/dashboard/editcompany/{id}', 'Admin\CompanyController@update');
Route::get('/dashboard/deletecompany/{id}', 'Admin\CompanyController@destroy');

// Employee
Route::get('/dashboard/employee', 'Admin\EmployeeController@index');
Route::get('/dashboard/addemployee', 'Admin\EmployeeController@create');
Route::post('/dashboard/addemployee', 'Admin\EmployeeController@store');
Route::get('/dashboard/editemployee/{id}', 'Admin\EmployeeController@edit');
Route::post('/dashboard/editemployee/{id}', 'Admin\EmployeeController@update');
Route::get('/dashboard/deleteemployee/{id}', 'Admin\EmployeeController@destroy');


// Admin
Route::get('/dashboard/admin', 'Admin\AdminController@index');
Route::get('/dashboard/addadmin', 'Admin\AdminController@create');
Route::post('/dashboard/addadmin', 'Admin\AdminController@store');
Route::get('/dashboard/editadmin/{id}', 'Admin\AdminController@edit');
Route::post('/dashboard/editadmin/{id}', 'Admin\AdminController@update');
Route::get('/dashboard/deleteadmin/{id}', 'Admin\AdminController@destroy');