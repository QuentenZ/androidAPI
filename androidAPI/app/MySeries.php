<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MySeries extends Model
{
    protected $table = "user_series";

    protected $fillable = [
        'user_id', 'series_id', 'current_episode',
    ];

    public function getSeries(){
        return $this->belongsTo('App\Series');
    }

    public function Series(){
        return $this->hasOne('App\Series', 'id', 'series_id');
    }
}
