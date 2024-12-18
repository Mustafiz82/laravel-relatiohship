    <?php

    namespace App\Models;

    use Illuminate\Database\Eloquent\Model;
    use Illuminate\Database\Eloquent\Relations\BelongsTo;

    class WatchList extends Model
    {
        public function sellerList():BelongsTo{
            return $this->belongsTo(WatchSeller::class ,'watch_sellerrr_id');
        }
    }
