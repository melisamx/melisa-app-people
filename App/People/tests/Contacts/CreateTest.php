<?php namespace App\People\tests\Contacts;

use App\People\tests\TestCase;
use App\People\Models\States;
use App\People\Models\Municipalities;
use App\People\Models\Labels;
use Melisa\Laravel\Database\InstallUser;

class CreateTest extends TestCase
{
    use InstallUser;
    
    /**
     * @test
     * @group completed
     */
    public function simple()
    {
        
        $user = $this->findUser();
        
        $this->actingAs($user)
        ->json('post', 'contacts', [
            'name'=>'asdasd',
            'lastName'=>'asdasd',
            'sex'=>1,
            'active'=>'on',
            'nickName'=>'',
            'idBloodType'=>2,
            'birthday'=>'25/02/2017',
        ])
        ->dump()
        /*->seeJson([
            'success'=>true,
        ])
        ->seeJsonStructure([
            'data'=>[
                '*'=>[
                    'idConnection', 'database', 'columnName'
                ]
            ],
            'total'
        ])*/;
        
    }
    
    /**
     * @test
     * @group dev
     */
    public function detail()
    {
        
        $user = $this->findUser();
        $state = States::first();
        $municipality = Municipalities::first();
        $label = Labels::first();
        
        $this->actingAs($user)
        ->json('post', 'contacts', [
            'name'=>'Test Name',
            'lastName'=>'Test LastName',
            'sex'=>1,
            'active'=>'on',
            'nickName'=>'',
            'idBloodType'=>2,
            'birthday'=>'25/02/2017',
            'emails'=>json_encode([
                [
                    'email'=>'asdasd@asdsd.dom',
                    'idLabel'=>$label->id,
                ]
            ]),
            'phoneNumbers'=>json_encode([
                [
                    'number'=>'1234567890',
                    'idLabel'=>$label->id,
                ]
            ]),
            'addresses'=>json_encode([
                [
                    'idState'=>$state->id,
                    'idMunicipality'=>$municipality->id,
                    'street'=>'Test calle',
                    'postalCode'=>'0123456',
                    'colony'=>'Test colony',
                ]
            ])
        ])
        ->seeJson([
            'success'=>true,
        ]);
        
    }
    
}
