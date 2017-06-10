<?php

namespace App\People\Logics\CodePostal;

use Melisa\core\LogicBusiness;
use App\Tools\Logics\Files\Reader\CsvLogics;
use App\People\Repositories\StatesRepository;
use App\People\Repositories\MunicipalitiesRepository;
use App\People\Repositories\TypesSettlementsRepository;
use App\People\Repositories\SettlementsRepository;

/**
 * Description of ImportLogic
 *
 * @author Luis Josafat Heredia Contreras
 */
class ImportLogic
{
    use LogicBusiness;
    
    protected $reader;
    protected $states;
    protected $municipalities;
    protected $typesSettlements;
    protected $settlements;
    
    public function __construct(
        StatesRepository $states,
        MunicipalitiesRepository $municipalities,
        TypesSettlementsRepository $typesSettlements,
        SettlementsRepository $settlements,
        CsvLogics $reader
    )
    {
        $this->states = $states;
        $this->municipalities = $municipalities;
        $this->typesSettlements = $typesSettlements;
        $this->settlements = $settlements;
        $this->reader = $reader;
    }
    
    public function init($filename)
    {        
        $data = $this->readFile($filename);
        $this->states->beginTransaction();
        $result = $this->process($data);
        
        if( !$result) {
            return false;
        }
        
        $this->states->commit();
        return $result;        
    }
    
    public function readFile($filename)
    {
        return $this->reader->init($filename);
    }
    
    public function process(&$reader)
    {
        foreach($reader as $row) {
            
            $state = $this->createStates([
                'name'=>$row->d_estado
            ]);
            
            if( !$state) {
                return $this->error('Imposible registrar estado {e}', [
                    'e'=>$row->d_estado
                ]);
            }
            
            $municipality = $this->createMuninicipalities([
                'idState'=>$state->id,
                'name'=>$row->D_mnpio
            ]);
            
            if( !$municipality) {
                return $this->error('Imposible registrar municipio {m} del estado {s}', [
                    'm'=>$row->D_mnpio,
                    'e'=>$row->d_estado,
                ]);
            }
            
            $idTypeSettlements = $this->createTypesSettlements([
                'name'=>$row->d_tipo_asenta
            ]);
            
            if( !$idTypeSettlements) {
                return false;
            }
            
            $idSettlement = $this->createSettlement([
                'idMunicipality'=>$municipality->id,
                'idTypeSettlement'=>$idTypeSettlements,
                'postalCode'=>(int)$row->d_codigo,
                'settlement'=>$row->d_asenta
            ]);
            
            if( !$idSettlement) {
                return $this->error('Imposible crear asentamiento {a} del estado {s}, municipio {m}', [
                    'a'=>$row->d_asenta,
                    's'=>$row->d_estado,
                    'm'=>$row->D_mnpio,
                ]);
            }
            
            $ids []= [
                'idState'=>$state->id,
                'idMunicipality'=>$municipality->id,
                'idTypeSettlement'=>$idTypeSettlements,
                'idSettlement'=>$idSettlement,
            ];            
        }
        
        return $ids;
    }
    
    public function createSettlement(array $input)
    {
        return $this->settlements->updateOrCreate($input);
    }
    
    public function createTypesSettlements(array $input)
    {
        $result = $this->typesSettlements->updateOrCreate($input);
        
        if( !$result) {
            return $this->error('Imposible crear tipo de asentamiento {t}', [
                't'=>$input['name']
            ]);
        }
        
        return $result->id;
    }
    
    public function createMuninicipalities(array $input)
    {
        return $this->municipalities->updateOrCreate($input);
    }
    
    public function createStates(array $input)
    {
        return $this->states->updateOrCreate($input);
    }
    
}
