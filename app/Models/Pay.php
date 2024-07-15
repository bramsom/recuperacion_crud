<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pay extends Model
{
    use HasFactory;

    public function Collaborators (){
        return $this->belongsTo('App\Models\Collaborator');
    }

    public function Payment_types (){

        return $this->belongsTo('App\Models\Payment_type');
    }
}
