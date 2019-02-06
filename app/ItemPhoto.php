<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ItemPhoto extends Model
{
    //ここから
    protected $fillable = ['item_id', 'path'];

    public function item()
    {
        return $this->belongsTo('App\Item');
    }
    //ここまで追加
}
