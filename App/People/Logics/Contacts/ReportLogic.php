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
                    'bloodType',
                    'emails'=>function($query) {
                        $query->with([
                            'label'
                        ]);
                    },
                    'labels'=>function($query) {
                        $query->with([
                            'label'
                        ]);
                    },
                    'addresses'=>function($query) {
                        $query->with([
                            'label',
                            'municipality',
                            'state'
                        ]);
                    },
                    'phoneNumbers'=>function($query) {
                        $query->with([
                            'label'
                        ]);
                    },
                    'files'=>function($query) {
                        $query->with([
                            'type',
                            'file'
                        ]);
                    }
                ])
                ->findOrFail($id);
        
        if( !$record) {
            return false;
        }
        
        $record = $record->toArray();
        
        $record ['phoneNumbers'] = $record['phone_numbers'];
        $record ['bloodType'] = $record['blood_type'];
        unset($record['phone_numbers'], $record['blood_type']);
        
        return $record;        
        
    }
    
}
