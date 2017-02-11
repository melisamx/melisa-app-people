<?php 

Route::post('/', 'LabelsContactsController@create')->middleware('gate:task.people.labels.contacts.create');
Route::post('delete', 'LabelsContactsController@delete')->middleware('gate:task.people.labels.contacts.delete');

Route::get('/', 'LabelsContactsController@paging')->middleware('gate:task.people.labels.contacts.paging');
Route::get('view', 'LabelsContactsController@view')->middleware('gate:task.people.labels.contacts.view.access');
Route::get('add', 'LabelsContactsController@add')->middleware('gate:task.people.labels.contacts.add.access');
