<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Team;

class TeamController extends Controller
{
    //
    public function create(){

        $teams = Team::all();

        return view('teams.create', ['teams' => $teams]);
    }

    public function store(){

        $attributes = request()->validate([
            'name' => 'required',
            'image' => 'nullable',
        ]);

        $team = Team::create([
            'name' => $attributes['name'],
        ]);

        if(isset($attributes['image'])){
            $image = "";
            $image = $attributes['image']->storeAs('teamimg/'.$team->id);
            $image = '/storage'.'/'.$image;
            $team->avatar = $image;
            $team->save();
        }

        
        $teams = Team::all();

        return view('teams.create', ['teams' => $teams]);
    }
}
