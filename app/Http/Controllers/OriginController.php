<?php

namespace App\Http\Controllers;

use App\Models\Origin;
use Illuminate\Http\Request;

class OriginController extends Controller
{
    //  
      public function create (){
        return view('origenes.create');
    }
    public function store(Request $request){

        $origin = new Origin();
        $origin->code_origin=$request->code_origin;
        $origin->name_origin=$request->name_origin;
        $origin->other_dates_o=$request->other_dates_o;
        $origin->save();
        return $request;
     }
     public function index(){

        $origins = Origin::orderBy('id', 'desc')->get();
        return view('origenes.index', compact('origins'));
    }
    public function show($id)
    {
        $origin = Origin::find($id);
        
        return view('origenes.show', compact('origin'));
    }
    public function destroy($id) {
        $origin = Origin::findOrFail($id);
        $origin->delete();
        return redirect()->route('origen.index');
    }
    public function edit(Origin $origin)
    {
        return view('origenes.editar', compact('origin'));
    }
    public function update(Request $request, Origin $origin)
{

    $origin->code_origin=$request->code_origin;
    $origin->name_origin=$request->name_origin;
    $origin->other_dates_o=$request->other_dates_o;
    $origin->save();

    return redirect()->route('origen.index');
}
}
