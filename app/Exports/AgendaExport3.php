<?php

namespace App\Exports;

use App\Agenda;

use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\Exportable;

class AgendaExport3 implements FromView
{
	use Exportable;
    // public function view(): View
    // {
    //     return view('Excel.descarga', [
    //         'agendas' => Agenda::all()
    //     ]);
    // }
    public function view(): View
    {
    	$agendas = Agenda::all();
        return view('Excel.descarga', compact('agendas'));
    }
}
