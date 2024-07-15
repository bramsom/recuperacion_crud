<?php

namespace App\Http\Controllers;
use App\Models\Project;
use App\Models\Collaborator;
use Illuminate\Http\Request;

class CollaboratorProjectController extends Controller
{
    //
    public function asociar(){
        $collaborators= Collaborator::all();
        $projects= Project::all();
        
        return view('collaborator_project.asociar', compact('collaborators','projects'));
    }

    public function store(Request $request){
        $collaborator=Collaborator::find($request->collaborator_id);

        $collaborator->projects()->attach($request->project_id);

        return 'SE HA CREADO UNA NUEVA ASOCIACION DE COLABORADORES Y PROJECTOS CON EXITO';
    }
}
