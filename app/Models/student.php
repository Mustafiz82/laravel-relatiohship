<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class student extends Model
{
    function productDetails():HasOne
    {
        return $this->hasOne('product::class' , "seller_id" , 'id');
    }
}
