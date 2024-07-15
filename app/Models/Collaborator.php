<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Collaborator extends Model
{
    use HasFactory;

    public function Projects (){
        return $this->belongsToMany('App\Models\Project');
    }

    public function Pay (){
        return $this->hasMany('App\Models\Pay');
    }
}
