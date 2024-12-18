<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class WatchSeller extends Model
{
    public function watchList():HasMany {
        return $this->hasMany(watchList::class , 'watch_sellerrr_id');
    }
    
}
