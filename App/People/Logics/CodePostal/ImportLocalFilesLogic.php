<?php

namespace App\People\Logics\CodePostal;

/**
 * Import code postal from csv files
 *
 * @author Luis Josafat Heredia Contreras
 */
class ImportLocalFilesLogic
{
    
    protected $import;

    public function __construct(
        ImportLogic $import
    )
    {
        $this->import = $import;
    }
    
    public function init($directory)
    {
        $files = \File::allFiles($directory);
        
        foreach($files as $file) {
            
            if( $file->getBasename() === 'Nota.csv') {
                continue;
            }
            
            $result = $this->import->init($file->getPathname());
            
            if( !$result) {
                return false;
            }
        }
        
        return true;
    }
    
}
