<?php 

Route::post('/', 'LabelsPhoneNumbersController@create')->middleware('gate:task.people.labels.phoneNumbers.create');
Route::post('delete', 'LabelsPhoneNumbersController@delete')->middleware('gate:task.people.labels.phoneNumbers.delete');

Route::get('/', 'LabelsPhoneNumbersController@paging')->middleware('gate:task.people.labels.phoneNumbers.paging');
Route::get('view', 'LabelsPhoneNumbersController@view')->middleware('gate:task.people.labels.phoneNumbers.view.access');
Route::get('add', 'LabelsPhoneNumbersController@add')->middleware('gate:task.people.labels.phoneNumbers.add.access');
