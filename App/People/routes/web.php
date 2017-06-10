<?php 

Route::group([
    'prefix'=>'modules',
    'namespace'=>'Modules',
    'middleware'=>'auth',
], function() {    
    require realpath(base_path() . '/routes/modules.php');    
});

Route::group([
    'prefix'=>'labelsContacts',
    'middleware'=>'auth',
], function() {    
    require realpath(base_path() . '/routes/modules/labelsContacts.php');    
});

Route::group([
    'prefix'=>'contacts',
    'middleware'=>'auth',
], function() {    
    require realpath(base_path() . '/routes/modules/contacts.php');    
});

Route::group([
    'prefix'=>'labelsEmails',
    'middleware'=>'auth',
], function() {    
    require realpath(base_path() . '/routes/modules/labelsEmails.php');    
});

Route::group([
    'prefix'=>'labelsPhoneNumbers',
    'middleware'=>'auth',
], function() {    
    require realpath(base_path() . '/routes/modules/labelsPhoneNumbers.php');    
});

Route::group([
    'prefix'=>'labelsContacts',
    'middleware'=>'auth',
], function() {    
    require realpath(base_path() . '/routes/modules/labelsContacts.php');    
});

Route::group([
    'prefix'=>'labelsAddresses',
    'middleware'=>'auth',
], function() {    
    require realpath(base_path() . '/routes/modules/labelsAddresses.php');    
});

Route::group([
    'prefix'=>'labelsPeople',
    'middleware'=>'auth',
], function() {    
    require realpath(base_path() . '/routes/modules/labelsPeople.php');    
});

Route::group([
    'prefix'=>'states',
    'middleware'=>'auth',
], function() {    
    require realpath(base_path() . '/routes/modules/states.php');    
});

Route::group([
    'prefix'=>'municipalities',
    'middleware'=>'auth',
], function() {    
    require realpath(base_path() . '/routes/modules/municipalities.php');    
});

Route::group([
    'prefix'=>'bloodTypes',
    'middleware'=>'auth',
], function() {    
    require realpath(base_path() . '/routes/modules/bloodTypes.php');    
});

Route::group([
    'prefix'=>'settlements',
    'middleware'=>'auth',
], function() {    
    require realpath(base_path() . '/routes/modules/settlements.php');    
});
