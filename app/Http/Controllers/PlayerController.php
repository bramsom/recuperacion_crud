<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Player;

class PlayerController extends Controller
{
    //
    public function create (){
        return view('jugadores.create');
    }

    public function store(Request $request){

        $player = new Player();
        $player->code=$request->code;
        $player->birthdate=$request->birthdate;
        $player->name=$request->name;
        $player->position=$request->position;
        $player->save();
        return $request;
     }

    public function index(){

        $players = Player::orderBy('id', 'desc')->get();
        return view('jugadores.index', compact('players'));
    }

    public function show($id)
    {
        $player = Player::find($id);
        
        return view('jugadores.show', compact('player'));
    }
    public function destroy($id) {
        $player = Player::findOrFail($id);
        $player->delete();
        return redirect()->route('jugador.index');
    }
    public function edit(Player $player)
    {
        return view('jugadores.editar', compact('player'));
    }

public function update(Request $request, Player $player)
{

    $player->code=$request->code;
    $player->birthdate=$request->birthdate;
    $player->name=$request->name;
    $player->position=$request->position;
    $player->save();

    return redirect()->route('jugador.index');
}


}
