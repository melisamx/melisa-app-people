<?php

namespace App\People\Database\Seeds\Data;

use Melisa\Laravel\Database\InstallSeeder;
use App\People\Logics\CodePostal\ImportLocalFilesLogic;

/**
 * 
 * 
 * @author Luis Josafat Heredia Contreras
 */
class CodePostalSeeder extends InstallSeeder
{
    
    public function run()
    {
        /* http://www.correosdemexico.gob.mx/lservicios/servicios/CodigoPostal_Exportar.aspx */
        app(ImportLocalFilesLogic::class)->init(__DIR__ . '/29-05-2017');        
    }
    
}
