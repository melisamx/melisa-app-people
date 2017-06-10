<?php

namespace App\People\Http\Controllers\Api\v1;

use Melisa\Laravel\Http\Controllers\Controller;
use App\People\Http\Requests\CodePostal\ImportRequest;
use App\People\Logics\CodePostal\ImportLogic;

/**
 * Description of CodePostal
 *
 * @author Luis Josafat Heredia Contreras
 */
class CodePostalController extends Controller
{
    public function import(ImportRequest $request, ImportLogic $logic)
    {
        return $logic->init($request->file->path());
    }
    
}
