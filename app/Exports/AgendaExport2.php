<?php

namespace App\Exports;

use App\Agenda;

use Illuminate\Database\Query\Builder;
//Para uso de querys
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\Exportable;
//Para encabezados de fila:
use Maatwebsite\Excel\Concerns\WithHeadings;
//Para dar un título a la hoja
use Maatwebsite\Excel\Concerns\WithTitle;


class AgendaExport2 implements FromQuery, WithHeadings, WithTitle
{
	use Exportable;

	public function headings(): array
    {
        return [
            '#',
            'Nombre',
            'Descripción',
            'Stock',
            'Fecha Creación',
            'Fecha Última Modificación'
        ];
    }

    public function query()
    {
        return Agenda::query();
        //return Agenda::where('id','>',3);
    }

    public function title(): string
    {
        return 'agenda';
    }
}
