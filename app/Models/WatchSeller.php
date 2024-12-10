<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class WatchSeller extends Model
{
    public function watchList():HasOne {
        return $this->hasOne(watchList::class , 'watch_sellerrr_id');
    }
}
