<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;;
use Illuminate\Database\Eloquent\Model;
class Tables extends Model{

    public static function searchTablesAv($data,$amountPeople,$idRestaurant){
        /*
            Function that searchs the available Tables for a given day and an amount of People.
        */
        
        $id_resTables=DB::table('reservated-tables')->where($data)->pluck('FK_idTable');       
        
        $id_Finals= DB::table('tables-rest')->whereNotIn('PK_idTable',$id_resTables)->where('numberChairs','>=',$amountPeople)->where('FK_idRestaurant','=',$idRestaurant)->pluck('PK_idTable');
        return($id_Finals);
    }

    public static function addTable($idTable,$reservationDate){
        $numberChairs = DB::table('tables-rest')->where('PK_idTable',$idTable)->value('numberChairs');
        $data = Array('FK_idTable'=>$idTable,'numberChairs'=>$numberChairs,'reservatedDate'=>$reservationDate);
        DB::table('reservated-tables')->insert($data);

    }
}
