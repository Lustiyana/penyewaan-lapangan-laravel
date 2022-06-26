<?php

namespace App\Http\Controllers;

use App\Models\Arena;
use Illuminate\Http\Request;

class ArenaController extends Controller
{
    public function index()
    {
        //get posts
        $arenas = Arena::latest()->paginate(5);

        //render view with posts
        return view('arenas.index', compact('arenas'));
    }
}
