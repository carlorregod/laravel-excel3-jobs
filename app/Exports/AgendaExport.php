<?php

namespace App\Exports;

use App\Almacen;
use Maatwebsite\Excel\Concerns\FromCollection;
//Para dar un título a la hoja
use Maatwebsite\Excel\Concerns\WithTitle;
//Para encabezados de fila:
use Maatwebsite\Excel\Concerns\WithHeadings;

class AgendaExport implements FromCollection, WithTitle, WithHeadings
{
	public function headings(): array
    {
        return [
            '#',
            'Nombre',
            'Stock',
            'Fecha Creación',
            'Fecha Última Modificación'
        ];
    }

    public function collection()
    {
        return Almacen::all();
    }

    public function title(): string
    {
        return 'almacen';
    }
}
