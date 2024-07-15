<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Player extends Model
{
    use HasFactory;
    public function Team(){
        return $this->hasMany('App\Models\Team');
    }

    public function gol (){
        return $this->hasMany('App\Models\Gol');

    }
}
