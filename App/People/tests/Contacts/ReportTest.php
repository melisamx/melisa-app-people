<?php namespace App\People\tests\Contacts;

use App\People\tests\TestCase;
use App\People\Models\People;
use App\People\Models\States;
use App\People\Models\Municipalities;
use App\People\Models\Labels;
use Melisa\Laravel\Database\InstallUser;

class ReportTest extends TestCase
{
    use InstallUser;
    
    /**
     * @test
     * @group completed
     */
    public function json()
    {
        
        $user = $this->findUser();
        $contact = People::first();
        
        $this->actingAs($user)
            ->json('get', "contacts/report/$contact->id/json/")
            ->dump()
            ->seeJson([
                'success'=>true,
            ]);
        
    }
    
}
