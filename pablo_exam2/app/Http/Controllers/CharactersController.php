<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Characters;

class CharactersController extends Controller
{
    function index(){

        $page_title = 'Characters';
        $char = Characters::all();

        return view('/characters', compact('page_title', 'char'));
    }

    function charMore(){

        $page_title = 'Characters: HP Above 80';
        $charmore = Characters::where('hp', '>', '80')->get();

        return view('/charactersmorehp', compact('page_title', 'charmore'));
    }

    function charLess(){

        $page_title = 'Characters: HP Equals or Below 80';
        $charless = Characters::where('hp', '<=', '80')->get();

        return view('/characterslesshp', compact('page_title', 'charless'));
    }
}
