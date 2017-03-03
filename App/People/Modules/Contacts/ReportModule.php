<?php namespace App\People\Modules\Contacts;

use App\Core\Logics\Modules\Outbuildings;

/**
 * 
 *
 * @author Luis Josafat Heredia Contreras
 */
class ReportModule extends Outbuildings
{
    
    public $layout = 'layouts.people.resumen';

    public function dataDictionary() {
        
        $input = $this->getInput();
        
        if( !$input) {
            return false;
        }
        
        return [
            'pageTitle'=>'People :: ' . $input['id'],
            'assets'=>[
                'header'=>$this->asset([
                    'bootstrap.reports',
                    'bootstrap.reports.print',
                    'fontawesome',
                ])
            ],
            'people'=>$input
        ];
        
    }
    
}
