<?php

namespace App\Http\Controllers;

use App\Models\product;
use App\Models\student;
use Illuminate\Http\Request;

class userController extends Controller
{
    function getProductWithUser(){
        // $data = student::find(11)->productDetails;
        $data = product::find(1);
        return $data;
    }
}
