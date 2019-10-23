<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tables;

class SearchTablesController extends Controller
{
    /**
     * Search the tables available for a date and a amount of people.
     * @param  array  $data
     * @return view(tablesAvailables)
     */
    function search_tablesAv(Request $data)
    {
    	/**
    	$sub=DB::table('reservatedTables') ->where([['reservationDate', '=', $data->reservationDate],['numberChairs','>=',$data->amountOfPeople]])
    		->pluck('idResTable');

		$tables = DB::table('tables_rest')->whereNotIn('PK_idTable',(DB::raw("({$sub->toSql()})")->mergeBindings($sub->getQuery())))->where('numberChairs','>=',$data->amountOfPeople)->pluck('PK_idTable');
		print_r($tables);
		if ($data->session()->has('reservationDate')){
			session()->forget('reservationDate');
		}
		if (session()->has('reservationHour')){
			session()->forget('reservationHour');
		}
		if (session()->has('amountOfPeople')){
			session()->forget('amountOfPeople');
		}**/
		$data->session()->put('reservationDate', $data->reservationDate); // guarda en la sesion $data (key, value)
		$data->session()->put('reservationHour', $data->reservationHour);
		$data->session()->put('amountOfPeople', $data->amountOfPeople);
		$data_In=Array (['reservatedDate', '=', $data->reservationDate],['numberChairs','>=',$data->amountOfPeople]);
		$tables_Av=Tables::searchTablesAv($data_In,$data->amountOfPeople,$data->session()->get('idRestaurant'));
		
		return view("tablesAvailables");
	}
	/**
     * Add the table choose.
     * @param  array  $data
     * @return view(tablesAvailables)
     */
	function add_Table(Request $tableCh)

	{
		$tableCh->session()->put('FK_idTable', $tableCh->idTable);
		Tables::addTable($tableCh->idTable,$tableCh->session()->get('reservationDate'));
		#return view('continueWhere');
		
	}
}
