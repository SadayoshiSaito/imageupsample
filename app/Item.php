<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    //ここから
    protected $fillable = ['name'];

    public function photos()
    {
        return $this->hasMany('App\ItemPhoto');
    }
    //ここまで追加
}
