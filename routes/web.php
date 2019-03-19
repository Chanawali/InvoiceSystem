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
/* ----------BASIC----------------*/
Route::get('/', function () {
    return view('basic.home');
});
Route::get('/dashboard', function () {
    return view('user.userpages.userdashboard');
});
/* -----------------------------------------------------------Login----------------------------------------------------*/
Route::get('/viewlogin','LoginController@viewlogin');
Route::post('/loginme','loginController@login');

/* ----------ADMIN----------------*/
/* ----------------------------------------------------------Registration---------------------------------------*/
Route::get('/registration','RegisterController@viewregister');
Route::post('/register','RegisterController@insert');
/* ---------------------EmployeeDetail---------------*/
/* ---------------------View Details---------------*/

/* ----------USER----------------*/
/* ---------------------------------------------------------Contacts--------------*/
Route::get('/viewcontacts','ContactController@viewcontact');
Route::get('/addcontacts','ContactController@viewaddcontact');
Route::post('/add','ContactController@insert');
Route::get('/editcontact/{id}','ContactController@edit');
Route::post('/updatecontact/{id}','ContactController@update');
Route::get('/viewdetailcontact/{id}','ContactController@detailview');
Route::post('/deletecontact/{id}','ContactController@delete');
Route::post('/restorecontact/{id}','ContactController@restore');
Route::get('/trashcontact','ContactController@viewtrash');
/* ---------------------------------------------------------Items--------------*/
Route::get('/viewitems','ItemController@viewitem');
Route::get('/viewadditems','ItemController@viewadditems');
Route::post('/additem','ItemController@insert');
Route::get('/edititem/{id}','ItemController@edit');
Route::post('/updateitem/{id}','ItemController@update');
Route::get('/viewdetailitem/{id}','ItemController@detailview');
Route::post('/deleteitem/{id}','ItemController@delete');
Route::post('/restoreitems/{id}','ItemController@restore');
Route::get('/trashitems','ItemController@viewtrash');
/* ----------------------------------------------------------Tax--------------*/
Route::get('/viewtaxgroup','TaxController@viewtaxgroup');
Route::post('/addtaxgroup','TaxController@inserttaxgroup');
Route::get('/viewaddtax/{id}','TaxController@viewid');
Route::post('/addtax','TaxController@inserttax');
/* ----------------------------------------------------------Estimate--------------*/
Route::get('/viewestimate','EstimateController@viewestimate');
Route::get('/viewaddestimate','EstimateController@viewaddestimate');
Route::post('/addestimate','EstimateController@insert');
Route::get('/viewestimatedoc/{id}','EstimateController@detailview');
/* -----------------------------------------------------------doc--------------*/
//Route::get('/viewestimatedoc/{id}','DocController@display');
//Route::get('/viewestimate/{id}','DocController@display');
//Route::get('/data','DocController@display');
/* ---------------------Invoice--------------*/
/* ---------------------Sales--------------*/
/* ---------------------Order--------------*/
/* ---------------------PaymentDetails--------------*/

