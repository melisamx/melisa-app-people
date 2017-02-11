<?php 

Route::group([
    'prefix'=>'modules',
    'namespace'=>'Modules'
], function() {
    
    require realpath(base_path() . '/routes/modules.php');
    
});

Route::group([
    'prefix'=>'contacts'
], function() {
    
    require realpath(base_path() . '/routes/modules/contacts.php');
    
});

Route::group([
    'prefix'=>'labelsContacts'
], function() {
    
    require realpath(base_path() . '/routes/modules/labelsContacts.php');
    
});
