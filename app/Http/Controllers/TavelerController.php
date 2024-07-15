<?php

namespace App\Http\Controllers;

use App\Models\Taveler;
use Illuminate\Http\Request;

class TavelerController extends Controller
{
    //
    public function create (){
        return view('viajeros.create');
    }
    public function store(Request $request){

        $taveler = new Taveler();
        $taveler->DNI=$request->DNI;
        $taveler->name=$request->name;
        $taveler->direction=$request->direction;
        $taveler->phone=$request->phone;
        $taveler->save();
        return $request;
     }
     public function index(){

        $tavelers = Taveler::orderBy('id', 'desc')->get();
        return view('viajeros.index', compact('tavelers'));
    }
    public Function show ($id){

        $taveler=Taveler::find($id);
        return view('viajeros/mostrar', compact('taveler'));

    }
    public function destroy($id) {
        $taveler = Taveler::findOrFail($id);
        $taveler->delete();
        return redirect()->route('viajero.index');
    }
    public function edit (Taveler $taveler)
    {
        return view('viajeros/editar', compact('taveler'));
    }
    
    public function update(Request $request, Taveler $taveler)
{
    $taveler->DNI=$request->DNI;
    $taveler->name=$request->name;
    $taveler->direction=$request->direction;
    $taveler->phone=$request->phone;
    $taveler->save();
    return redirect()->route('viajero.index');
}


}
