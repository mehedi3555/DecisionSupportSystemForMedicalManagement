<?php


Route::get('/', 'MainController@index');
Route::get('/m','MainController@management');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('frontEnd.pages.home');

Route::get('/diseases-reg','DiseasesController@register');
Route::post('/save/diseases', 'DiseasesController@storeDiseases');

Route::get('/patient-reg','PrescriptionController@register');
Route::post('/save/patient','PrescriptionController@storePatient');


Route::get('/patient-info','PatientController@info');
Route::get('/weekly-chart','GraphController@weekly');
Route::get('/monthly-chart','GraphController@monthly');
Route::get('/yearly-chart','GraphController@yearly');

Route::get('/mreg','ManagementRegController@index');
Route::post('/save/management', 'ManagementRegController@storeManagement');

Route::get('/management','ManagementLoginController@index')->name('frontEnd.management.managementhome');
Route::post('/managementlogin', 'AuthManagement\LoginController@login')->name('management.login.submit');

Route::get('/mweekly-chart','ManagementController@mweekly');
Route::get('/mmonthly-chart','ManagementController@mmonthly');
Route::get('/myearly-chart','ManagementController@myearly');


Route::get('/search/Weekly/','SearchController@weekly');
Route::get('/search/Monthly/','SearchController@monthly');


Route::get('/msearch/Weekly/','MSearchController@weekly');
Route::get('/msearch/Monthly/','MSearchController@monthly');
