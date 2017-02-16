<?php 

Route::get('/', 'StatesController@paging')->middleware('gate:task.people.states.paging');
