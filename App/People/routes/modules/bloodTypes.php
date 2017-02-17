<?php 

Route::get('/', 'BloodTypes@paging')->middleware('gate:task.people.bloodTypes.paging');
