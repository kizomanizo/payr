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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index');

// Companies routes
Route::resource('companies', 'CompanyController');

// Departments routes
Route::resource('departments', 'DepartmentController');

// Titles routes
Route::resource('titles', 'TitleController');

// Employees routes
Route::resource('employees', 'EmployeeController');
Route::get('employees/add-employees/ajax-state', 'EmployeeController@ajaxstate');
Route::get('employees/add-employees/ajax-department', 'EmployeeController@ajaxdepartment');

//Pensions routes
Route::resource('pensions', 'PensionController');