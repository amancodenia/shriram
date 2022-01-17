<?php

/* custom routes generated by CRUD */


Route::group(array('prefix' => 'admin/','namespace' => 'Admin','middleware' => 'admin','as'=>'admin.'), function () {

Route::get('classes', ['as'=> 'classes.index', 'uses' => 'ClassesController@index']);
Route::post('classes', ['as'=> 'classes.store', 'uses' => 'ClassesController@store']);
Route::get('classes/create', ['as'=> 'classes.create', 'uses' => 'ClassesController@create']);
Route::put('classes/{classes}', ['as'=> 'classes.update', 'uses' => 'ClassesController@update']);
Route::patch('classes/{classes}', ['as'=> 'classes.update', 'uses' => 'ClassesController@update']);
Route::get('classes/{id}/delete', ['as' => 'classes.delete', 'uses' => 'ClassesController@getDelete']);
Route::get('classes/{id}/confirm-delete', ['as' => 'classes.confirm-delete', 'uses' => 'ClassesController@getModalDelete']);
Route::get('classes/{classes}', ['as'=> 'classes.show', 'uses' => 'ClassesController@show']);
Route::get('classes/{classes}/edit', ['as'=> 'classes.edit', 'uses' => 'ClassesController@edit']);

});