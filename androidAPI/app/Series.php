<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Series extends Model
{
    protected $table = "series";

    public $timestamps = false;

    protected $fillable = [
        'name', 'amountEpisode','rating',
    ];

    public function getMySeries(){
        return "getMySeries";
    }

    public function MySeries(){
        return "MySeries";
    }
}
