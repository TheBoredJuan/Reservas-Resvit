<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Decoration;

class DecorationController extends Controller
{
    //
    function index() {
        return view("decoration");
    }

    function search_decors(Request $data)
    {
        Decoration::searchDecoration($data->idRestaurant);
    }
}
