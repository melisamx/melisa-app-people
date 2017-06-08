<?php

namespace App\People\Logics\CodePostal;

use Maatwebsite\Excel\Files\ExcelFile;

/**
 * Description of ExcelImport
 *
 * @author Luis Josafat Heredia Contreras
 */
class ExcelImport extends ExcelFile
{

    public function getFile()
    {
        $file = \Input::file('file');
        dd($file);
    }

    public function getFilters()
    {
        return [
            'chunk'
        ];
    }

}