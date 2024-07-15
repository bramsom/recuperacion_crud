<?php

namespace App\Http\Controllers;

use App\Models\Game;
use App\Models\Team;
use Illuminate\Http\Request;

class GameTeamcontroller extends Controller
{
    //
    public function asociar(){
        $teams= Team::all();
        $games= Game::all();
        
        return view('game_team.asociar', compact('teams','games'));
    }

    public function store(Request $request){
        $team=Team::find($request->team_id);

        $team->games()->attach($request->game_id);

        return 'SE HA CREADO UNA NUEVA ASOCIACION DE EQUIPOS A PARTIDOS CON EXITO';
    }
}
