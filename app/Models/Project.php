<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;
    public function Customers (){
        return $this->belongsTo('App\Models\Customer');
    }

    public function Collaborators (){
        return $this->belongsToMany('App\Models\Collaborator');
    }
}
