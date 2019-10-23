<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model{

    public static function insertData($data){
        DB::table('reservations')->insert($data);
        return 1;
    }

    public static function updateData($id,$data){
        DB::table('reservations')->where('PK_idReservation',$id)->update($data);
    }

    public static function deleteData($id){
        DB::table('reservations')->where('PK_idReservation', '=', $id)->delete();
    }

}
