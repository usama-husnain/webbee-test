<?php


namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class MenuItem extends Model
{


    public function childs() {
        return $this->hasMany('App\Models\MenuItem','parent_id','id') ;
    }
}
