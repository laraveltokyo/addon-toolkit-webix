<?php 

Route::get('ajax', 'AjaxDemoController@index');
Route::post('ajax/success', 'AjaxDemoController@postSuccess');
Route::post('ajax/error', 'AjaxDemoController@postError');
