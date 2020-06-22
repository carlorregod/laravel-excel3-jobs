<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

use App\Exports\AgendaExport;
use Maatwebsite\Excel\Facades\Excel;

Route::get('download_excel',function(){
	return Excel::download(new AgendaExport, 'agenda.xlsx');
});

use App\Exports\AgendaExport2;
Route::get('download_excel2',function(){
	return (new AgendaExport2)->download('agenda2.xlsx');
});

use App\Exports\AgendaExport3;
Route::get('export_excel',function(){
	(new AgendaExport3)->store('agenda3.xlsx');
	echo "Exito";
});

use App\Exports\AgendaExport4;
Route::get('download_excel_sheets',function(){
	return Excel::download(new AgendaExport4, 'agenda_sheets.xlsx');
});


