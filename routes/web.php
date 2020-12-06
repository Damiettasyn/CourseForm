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

Route::get('/', function () {
    return view('landing');
});
Route::resource('employee','employeescontroller');
//Route::get('create','employeescontroller@create');
//Route::POST('create','employeescontroller@store');

Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]
    ], function(){
        Route::get('create','employeescontroller@create');
        Route::POST('create','employeescontroller@store');
    });

    Route::get('contact','contactcontroller@contact');
    Route::POST('contact','contactcontroller@store');
    
    Route::get('contacts/contact', function () {
        return view('contacts.contact');
    });
