<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reservation;

class ConfirmationController extends Controller
{
    //
    function index(Request $data) {
        //Sent data to front
        $data->session()->put('idDecoration',0);
        return view("confirmation");
    }

    function save_toBD(Request $data) {
        /*
        $newReq= new CreateReservation;
        $newReq->FK_idTable = $data->session()->FK_idTable;
        #idRestaurante
        #idUsuarioCreator 
        $newReq->FK_idDecoration = $data->session()->get('idDecoration');
        $newReq->personInCharge = $data->personInCharge;
        $newReq->reservationDate = $data->session()->get('reservationDate');
        $newReq->reservationHour = $data->session()->get('reservationHour');
        $newReq->reservationType = $data->session()->get('reservationType');
        #cardNumber
        #reservationTotal
        $newReq->amountOfPeople = $data->session()->get('amountOfPeople');
        #reservationStatus
        #comments
        */
        
        //Construct the array
        $data_In = array('FK_idRestaurant'=>$data->idRestaurant,'FK_reservationCreator'=>$data->resCreator,'FK_idTable'=>$data->idTable,'FK_idDecoration'=>$data->idDecoration,'personInCharge'=>$data->personInCharge,'reservationDate'=>$data->reservationDate,'reservationHour'=>$data->reservationHour,'reservationType'=>$data->typeReservation,'cardNumber'=>$data->cardNumber,'reservationTotal'=>$data->total,'availableChairs'=>$data->availableChairs,'comments'=>$data->comments);
        
        //Insert
        Reservation::insertData($data_In);
    }
}
