<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Journey extends Model
{
    use HasFactory;

    public function Tavelers (){
        return $this->belongsTo('App\Models\Taveler');
    }

    public function Origins (){
        return $this->belongsTo('App\Models\Origin');
    }
    public function Destinations (){
        return $this->belongsTo('App\Models\Destination');
    }
}
