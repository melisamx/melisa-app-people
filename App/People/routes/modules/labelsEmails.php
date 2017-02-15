<?php 

Route::post('/', 'LabelsEmailsController@create')->middleware('gate:task.people.labels.emails.create');
Route::post('delete', 'LabelsEmailsController@delete')->middleware('gate:task.people.labels.emails.delete');

Route::get('/', 'LabelsEmailsController@paging')->middleware('gate:task.people.labels.emails.paging');
Route::get('view', 'LabelsEmailsController@view')->middleware('gate:task.people.labels.emails.view.access');
Route::get('add', 'LabelsEmailsController@add')->middleware('gate:task.people.labels.emails.add.access');
