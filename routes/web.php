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

use App\Mail\WelcomeClient;

/* Route::get('/','PrincipalController@index')->name('index'); */

Route::resource('clients', 'ClientsController');
Route::get('/clientes/{cliente}/destroy', 'clientsController@destroy')->name('clients.destroy');

Route::resource('accounts', 'AccountsController');
Route::get('/accounts/{account}/destroy', 'accountsController@destroy')->name('accounts.destroy');

//Route::resource('transactions', 'TransactionsController');
//Route::get('/transactions/{transaction}/destroy', 'transactionsController@destroy')->name('transactions.destroy');

Route::get('/transactions/{cuenta}/create','transactionsController@create')->name('transactions.create');
Route::post('/transactions/store','transactionsController@store')->name('transactions.store');


Route::get('/transactions/{cuenta}/index', 'transactionsController@index')->name('transactions.index');
Route::get('/transactions/{cuenta}/show', 'transactionsController@show')->name('transactions.show');

Route::get('/pdf/clients', 'clientsController@generarPdf')->name('clients.generarPdf');

Auth::routes();

Route::get('/', 'HomeController@index')->name('index');

Route::get('/pdf','pdfController@generatePDF');

Route::get('/email', function(){
    Mail::to('javigora97@gmail.com', 'Javier')
    ->send(new WelcomeClient());
});