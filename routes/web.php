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
Route::get('companies/list-companies', 'CompanyController@index')->name('listcompanies');
Route::get('companies/add-companies', 'CompanyController@create')->name('createcompany');
Route::post('companies/addcompany', 'CompanyController@store')->name('storecompany');
Route::get('companies/edit-companies/{id}', 'CompanyController@edit')->name('editcompany');
Route::put('companies/editcompany/{id}', 'CompanyController@update')->name('updatecompany');
Route::get('companies/deletecompany/{id}', 'CompanyController@delete')->name('deletecompany');

// Departments routes
Route::get('departments/list-departments', 'DepartmentController@index');
Route::get('departments/list-departments/{id}', 'DepartmentController@department');
Route::get('departments/add-departments', 'DepartmentController@create');
Route::post('departments/adddepartment', 'DepartmentController@store');
Route::get('departments/edit-departments/{id}', 'DepartmentController@edit');
Route::put('departments/editdepartment/{id}', 'DepartmentController@update');
Route::get('departments/deletedepartment/{id}', 'DepartmentController@delete');

// Titles routes
Route::get('titles/list-titles', 'TitleController@index');
Route::get('titles/list-titles/{id}', 'TitleController@title');
Route::get('titles/add-titles', 'TitleController@create');
Route::post('titles/addtitle', 'TitleController@store');
Route::get('titles/edit-titles/{id}', 'TitleController@edit');
Route::put('titles/edittitle/{id}', 'TitleController@update');
Route::get('titles/deletetitle/{id}', 'TitleController@delete');