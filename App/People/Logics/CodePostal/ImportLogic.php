<?php

namespace App\People\Logics\CodePostal;

use App\People\Repositories\StatesRepository;
use App\People\Repositories\MunicipalitiesRepository;

/**
 * Description of ImportLogic
 *
 * @author Luis Josafat Heredia Contreras
 */
class ImportLogic
{
    
    protected $states;
    protected $municipalities;
    
    public function __construct(
        StatesRepository $states,
        MunicipalitiesRepository $municipalities
    )
    {
        $this->states = $states;
        $this->municipalities = $municipalities;
    }
    
    public function init($request)
    {
        $fileName = $this->getFileName($request);        
        $reader = \Excel::load($fileName)->get();
        
        $this->states->beginTransaction();
        
        $result = $this->process($reader);
        dd($result);
    }
    
    public function process(&$reader)
    {
        foreach($reader as $row) {
            
            $idState = $this->createStates([
                'name'=>$row->d_estado
            ]);
            dd($idState);
        }
    }
    
    public function createStates($input)
    {
        return $this->states->updateOrCreate($input);
    }
    
    public function getFileName(&$request)
    {
        $path = $request->file->path();
        return $path;
    }
    
}
