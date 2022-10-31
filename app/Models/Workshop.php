<?php


namespace App\Models;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Date;
use App\Models\Event;

class Workshop extends Model
{


    public function events(){
        return $this->belongsTo('App\Models\Event');
    }
}


