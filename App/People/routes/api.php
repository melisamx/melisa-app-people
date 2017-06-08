<?php 

Route::group([
    'prefix'=>'v1',
    'middleware'=>'auth.basic',
    'namespace' =>'v1'
], function() {
    Route::group([
        'prefix'=>'codePostal'
    ], function() {
        require realpath(base_path() . '/routes/modules/codePostal.php');
    });   
});
