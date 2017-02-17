<?php namespace App\People\Logics\Contacts;

use App\People\Repositories\PeopleRepository;
use Melisa\core\LogicBusiness;

/**
 * Create contact and all information posible (emails, phone numbers, etc.)
 *
 * @author Luis Josafat Heredia Contreras
 */
class CreateLogic
{
    use LogicBusiness;
    
    protected $peopleRepository;

    public function __construct(
          PeopleRepository $peopleRepository    
        )
    {
        $this->peopleRepository = $peopleRepository;
    }
    
    public function init($input = [])
    {
        
        $this->peopleRepository->beginTransaction();
        
        $idPeople = $this->createPeople($input);
        
        if( !$idPeople) {
            return false;
        }
        
        $event = [
            'idPeople'=>$idPeople
        ];
        
        if( !$this->emitEvent('app.people.contact.create.success', $event)) {
            return $this->peopleRepository->rollBack();
        }
        
        $this->peopleRepository->commit();
        return $event;
        
    }
    
    public function createPeople(&$input)
    {
        
        $input ['idIdentityCreated']= $this->getIdentity();
        
        $idPeople = $this->peopleRepository->create($input);
        
        if( !$idPeople) {
            return $this->error('Imposible crear registro de la persona');
        }
        
        return $idPeople;
        
    }
    
}
