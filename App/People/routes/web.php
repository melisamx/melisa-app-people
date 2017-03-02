<?php 

Route::group([
    'prefix'=>'modules',
    'namespace'=>'Modules'
], function() {
    
    require realpath(base_path() . '/routes/modules.php');
    
});

Route::group([
    'prefix'=>'labelsContacts'
], function() {
    
    require realpath(base_path() . '/routes/modules/labelsContacts.php');
    
});

Route::group([
    'prefix'=>'contacts'
], function() {
    
    require realpath(base_path() . '/routes/modules/contacts.php');
    
});

Route::group([
    'prefix'=>'labelsEmails'
], function() {
    
    require realpath(base_path() . '/routes/modules/labelsEmails.php');
    
});

Route::group([
    'prefix'=>'labelsPhoneNumbers'
], function() {
    
    require realpath(base_path() . '/routes/modules/labelsPhoneNumbers.php');
    
});

Route::group([
    'prefix'=>'labelsContacts'
], function() {
    
    require realpath(base_path() . '/routes/modules/labelsContacts.php');
    
});

Route::group([
    'prefix'=>'labelsAddresses'
], function() {
    
    require realpath(base_path() . '/routes/modules/labelsAddresses.php');
    
});

Route::group([
    'prefix'=>'labelsPeople'
], function() {
    
    require realpath(base_path() . '/routes/modules/labelsPeople.php');
    
});

Route::group([
    'prefix'=>'states'
], function() {
    
    require realpath(base_path() . '/routes/modules/states.php');
    
});

Route::group([
    'prefix'=>'municipalities'
], function() {
    
    require realpath(base_path() . '/routes/modules/municipalities.php');
    
});

Route::group([
    'prefix'=>'bloodTypes'
], function() {
    
    require realpath(base_path() . '/routes/modules/bloodTypes.php');
    
});
