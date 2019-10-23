<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Reservation;
use Session;

class UpdateDeleteResController extends Controller
{
  public function delete_reservation($idRes=0){
    if($idRes != 0){
      // Delete
      Reservation::deleteData($idRes);
      
     }
    return view('myReservations');
  }
  public function update_reservation(Request $data){
    if ($data->idReservation != 0){
      // Update
      $data_In = array('personInCharge'=>$data->personInCharge,'reservationType'=>$data->typeReservation,'comments'=>$data->comments);
        
      Reservation::updateData($data->idReservation,$data_In);
    }
    return view('myReservations');
    


  }

}
