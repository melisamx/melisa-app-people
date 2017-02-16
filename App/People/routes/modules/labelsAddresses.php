<?php 

Route::post('/', 'LabelsAddressesController@create')->middleware('gate:task.people.labels.addresses.create');
Route::post('delete', 'LabelsAddressesController@delete')->middleware('gate:task.people.labels.addresses.delete');

Route::get('/', 'LabelsAddressesController@paging')->middleware('gate:task.people.labels.addresses.paging');
Route::get('view', 'LabelsAddressesController@view')->middleware('gate:task.people.labels.addresses.view.access');
Route::get('add', 'LabelsAddressesController@add')->middleware('gate:task.people.labels.addresses.add.access');
