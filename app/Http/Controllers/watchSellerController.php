<?php

namespace App\Http\Controllers;

use App\Models\WatchList;
use App\Models\WatchSeller;


class watchSellerController extends Controller
{
    function getWatch(){
        // $data = WatchSeller::with('watchList')->get() ;
        $data = WatchSeller::with('watchList')->find(2) ;
        // $data = WatchSeller::find(1)->watchList;
        return $data;
    }

    function getSeller(){
        $data = WatchList::with('sellerList')->get();
        return $data;
    }   
}
