<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Actor;


class ActorController extends Controller
{
    public static function directory ()
    {
        $actors=Actor::all();
        return view('actors', ['actors' => $actors]);
        
    }
    public function show($id)
    {
        $actor = Actor::find($id);
        dd($actor);
    }
    public function search(Request $request)
    {
        $actors = Actor::where('first_name', 'LIKE', '%'.  $request->input('search'). '%')->get();

        return view('actors', compact('actors'));

    }
}
