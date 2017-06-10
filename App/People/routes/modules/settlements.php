<?php 

Route::get('/', 'SettlementsController@paging')->middleware('gate:task.people.settlements.paging');
