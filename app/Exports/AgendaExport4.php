<?php

namespace App\Exports;

use App\Agenda;

use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\WithMultipleSheets;

//Usando los otros exports
use App\Exports\AgendaExport;
use App\Exports\AgendaExport2;
use App\Exports\AgendaExport3;

class AgendaExport4 implements WithMultipleSheets
{
	use Exportable;

    public function sheets(): array
    {
        $sheets = Array();
        $sheets['almacenes'] = new AgendaExport();
        $sheets['agenda-se'] = new AgendaExport2();
        $sheets['agenda-ce'] = new AgendaExport3();

        return $sheets;
    }
}
