<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    use HasFactory;
    public function President(){
        return $this->belongsTo('App\Models\President');
    }

    public function players(){
        return $this->belongsTo('App\Models\Player');
    }

    public function Games(){
        return $this->belongsToMany('App\Models\Game');
    }
}
