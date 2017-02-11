<?php 

Route::post('/', 'ContactsController@create')->middleware('gate:task.people.contacts.create');
Route::post('delete', 'ContactsController@delete')->middleware('gate:task.people.contacts.delete');

Route::get('/', 'ContactsController@paging')->middleware('gate:task.people.contacts.paging');
Route::get('view', 'ContactsController@view')->middleware('gate:task.people.contacts.view.access');
Route::get('add', 'ContactsController@add')->middleware('gate:task.people.contacts.add.access');
