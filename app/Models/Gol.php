<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gol extends Model
{
    use HasFactory;
    public function players (){
        return $this->belongsTo('App\Models\Player');
    }

    public function Games(){
        return $this->belongsTo('App\Models\Game');
    }
}
