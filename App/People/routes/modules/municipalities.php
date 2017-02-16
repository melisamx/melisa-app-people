<?php 

Route::get('/', 'MunicipalitiesController@paging')->middleware('gate:task.people.municipalities.paging');
