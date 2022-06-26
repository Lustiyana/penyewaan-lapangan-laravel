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
            'name' => 'required',
            'price'=>'required'
        ]);
        Arena::create([
            'name'=>$request->name,
            'price'=>$request->price
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
            'name' => 'required',
            'price'=>'required'
        ]);

        $arena->update([
            'name'=>$request->name,
            'price'=>$request->price,
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
