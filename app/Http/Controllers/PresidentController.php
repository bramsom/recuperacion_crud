<?php

namespace App\Http\Controllers;

use App\Models\President;
use Illuminate\Http\Request;

class PresidentController extends Controller
{
    //
    public function create (){
        return view('presidentes.create');
    }

    public function store(Request $request){

        $president = new President();
        $president->DNI=$request->DNI;
        $president->name=$request->name;
        $president->last_name=$request->last_name;
        $president->birth_date=$request->birth_date;
        $president->year=$request->year;
        $president->save();
        return $request;
     }

     public function index(){

        $presidents = President::orderBy('id', 'desc')->get();
        return view('presidentes.index', compact('presidents'));
    }

    public Function show ($id){

        $president=President::find($id);
        return view('presidentes/mostrar', compact('president'));

    }

    public function destroy($id) {
        $president = President::findOrFail($id);
        $president->delete();
        return redirect()->route('presidente.index');
    }

    public function edit (President $president)
    {
        return view('presidentes/editar', compact('president'));
    }
    
    public function update(Request $request, President $president)
{

    $president->DNI=$request->DNI;
    $president->name=$request->name;
    $president->last_name=$request->last_name;
    $president->birth_date=$request->birth_date;
    $president->year=$request->year;
    $president->save();

    return redirect()->route('presidente.index');
}
}
