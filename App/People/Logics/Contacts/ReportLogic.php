<?php namespace App\People\Logics\Contacts;

use Melisa\core\LogicBusiness;
use App\People\Repositories\PeopleRepository;

/**
 * Reporte general de una persona
 *
 * @author Luis Josafat Heredia Contreras
 */
class ReportLogic
{
    use LogicBusiness;
    
    protected $repository;

    public function __construct(PeopleRepository $repository)
    {
        $this->repository = $repository;
    }
    
    public function init($id)
    {
        
        $record = $this->repository
                ->with([
                    'emails',
                    'labels'=>function($query) {
                        $query->with([
                            'labels'
                        ]);
                    },
                    'adresses'=>function($query) {
                        $query->with([
                            'labels'
                        ]);
                    },
                    'phoneNumbers'=>function($query) {
                        $query->with([
                            'labels'
                        ]);
                    }
                ])
                ->findOrFail($id);
        
        if( !$record) {
            return false;
        }
        
        $record = $record->toArray();
        
        $record ['phoneNumbers'] = $record['phone_numbers'];
        unset($record['phone_numbers']);
        
        return $record;        
        
    }
    
}
