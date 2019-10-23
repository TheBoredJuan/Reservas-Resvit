<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CreateReservation;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;


class CreateReservationController extends Controller
{
	/**
	protected function validator(array $data){
        return Validator::make($data, [
            'personInCharge' => ['required', 'string', 'max:50'],
            'reservationDate' => ['required', 'date(d/m/Y)'],
            'reservationHour' => ['required', 'string', 'max:5'],
            'reservationType' => ['required', 'string'],
            'amountOfPeople' => ['required', 'number_format(100)']
        ]);
    }**/
    /**
     * Create a new Reservation after a valid input.
     *
     * @param  array  $data
     * @return \App\CreateReservation
     */
    function create_reservation(Request $data)
    {
        $newReq= new CreateReservation;
        $newReq->personInCharge = $data->personInCharge;
        $newReq->reservationDate = $data->reservationDate;
        $newReq->reservationHour = $data->reservationHour;
        $newReq->reservationType = $data->reservationType;
        $newReq->amountOfPeople = $data->amountOfPeople;
        $newReq->save();
        print_r($newReq->id);
        session()->put('idReservation', $newReq->id);
        return view('continueWhere');
    }
}
