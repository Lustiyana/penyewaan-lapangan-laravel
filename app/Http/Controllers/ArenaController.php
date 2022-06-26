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


    public function create()
    {
        return view('arenas.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'arena_code' => 'required',
            'price'=>'required',
            'time'=>'required',
            'status'=>'required',
        ]);
        Arena::create([
            'arena_code'=>$request->arena_code,
            'price'=>$request->price,
            'time'=>$request->time,
            'status'=>$request->status,
        ]);
        return redirect()->route('arenas.index')->with(['success' => 'Data Berhasil Disimpan!']);
    }

    public function edit(Arena $arena)
    {
        return view('arenas.edit', compact('arena'));
    }

    public function update(Request $request, Arena $arena)
    {
        //validate form
        $this->validate($request, [
            'arena_code' => 'required',
            'price'=>'required',
            'time'=>'required',
            'status'=>'required',
        ]);

        $arena->update([
            'arena_code'=>$request->arena_code,
            'price'=>$request->price,
            'time'=>$request->time,
            'status'=>$request->status,
        ]);

        //redirect to index
        return redirect()->route('arenas.index')->with(['success' => 'Data Berhasil Diubah!']);
    }

    public function destroy(Arena $arena)
    {

        //delete post
        $arena->delete();

        //redirect to index
        return redirect()->route('arenas.index')->with(['success' => 'Data Berhasil Dihapus!']);
    }
}
