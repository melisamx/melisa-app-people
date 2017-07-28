<?php 

Route::get('/', 'CountriesController@paging')->middleware('gate:task.people.countries.paging');
