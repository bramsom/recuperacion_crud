<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Collaborator;
use Collator;

class CollaboratorController extends Controller
{
    //
    public function create (){
        return view('colaboradores.create');
    }

    public function store(Request $request){

        $collaborator = new Collaborator();
        $collaborator->nif=$request->nif;
        $collaborator->name=$request->name;
        $collaborator->save();
        return $request;
     }
     public function index(){

        $collaborators = Collaborator::orderBy('id', 'desc')->get();
        return view('colaboradores.index', compact('collaborators'));
    }
    public Function show ($id){

        $collaborator=Collaborator::find($id);
        return view('colaboradores/mostrar', compact('collaborator'));

    }
    public function destroy($id) {
        $collaborator = Collaborator::findOrFail($id);
        $collaborator->delete();
        return redirect()->route('colaborador.index');
    }
    public function edit (Collaborator $collaborator)
    {
        return view('colaboradores/editar', compact('collaborator'));
    }
    public function update(Request $request, Collaborator $collaborator)
    {

    $collaborator->nif=$request->nif;
    $collaborator->name=$request->name;
    $collaborator->save();

    return redirect()->route('colaborador.index');
}


}
