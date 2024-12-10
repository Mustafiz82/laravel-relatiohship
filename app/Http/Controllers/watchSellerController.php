<?php

namespace App\Http\Controllers;

use App\Models\WatchSeller;


class watchSellerController extends Controller
{
    function getWatch(){
        $data = WatchSeller::with('watchList')->get() ;
        return $data;
    }
}
