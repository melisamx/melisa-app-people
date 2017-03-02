<?php 

Route::post('/', 'LabelsPeopleController@create')->middleware('gate:task.people.labels.people.create');
Route::post('delete', 'LabelsPeopleController@delete')->middleware('gate:task.people.labels.people.delete');

Route::get('/', 'LabelsPeopleController@paging')->middleware('gate:task.people.labels.people.paging');
Route::get('view', 'LabelsPeopleController@view')->middleware('gate:task.people.labels.people.view.access');
Route::get('add', 'LabelsPeopleController@add')->middleware('gate:task.people.labels.people.add.access');
