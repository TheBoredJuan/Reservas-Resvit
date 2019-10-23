<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;;
use Illuminate\Database\Eloquent\Model;
class Res_DinerU extends Model{

    public static function addPerson($data){
//The entry $data has to be of the form array(['FK_idReservation'=>idReservation,'FK_idDinerU'=>idPersonThatApplies],['status'=>1])
        /*
            Function that adds a new DinerUser that applies for a public reservation.
        */
        DB::table('Res_DinerU')->firstOrCreate($data);       
    }

    public static function changeStatus($queryWhere,$newStatus){
//The entry $queryWhere has to be of the form array(['FK_idReservation','=',idReservation],['FK_idDinerU', '=' ,idPersonThatApplies])
//The entry $newStatus has to be of the form array('status'=>newStatus)
        DB::table('Res_DinerU')->where($queryWhere)->update($newStatus);
    }

    public static function givePublicResxCreator($idCreatorRes){
        /*
            Function that returns all the public reservations of a person.
        */ 

        $theReservations = DB::table('Res_DinerU-tables')->where($data)->pluck('FK_idTable'); 
    }
}
