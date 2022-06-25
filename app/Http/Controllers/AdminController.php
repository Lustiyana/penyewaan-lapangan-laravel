<?php

namespace App\Http\Controllers;

use App\Models\Lapangan;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $lapangan = Lapangan::all();
        return view ('admin/lapangan.index')->with('lapangan', $lapangan);
    }
    
    public function create()
    {
        return view('admin/lapangan.create');
    }
  
    public function store(Request $request)
    {
        $input = $request->all();
        Lapangan::create($input);
        return redirect('data_lapangan')->with('flash_message', 'Student Addedd!');  
    }
    
    public function show($id)
    {
        $data_lapangan = Lapangan::find($id);
        return view('admin/lapangan.index')->with('lapangan', $data_lapangan);
    }
    
    public function edit($id)
    {
        $data_lapangan = Lapangan::find($id);
        return view('lapangan.edit')->with('lapangan', $data_lapangan);
    }
  
    public function update(Request $request, $id)
    {
        $data_lapangan = Lapangan::find($id);
        $input = $request->all();
        $data_lapangan->update($input);
        return redirect('data_lapangan')->with('flash_message', 'student Updated!');  
    }
  
    public function destroy($id)
    {
        Lapangan::destroy($id);
        return redirect('data_lapangan')->with('flash_message', 'Student deleted!');  
    }
}
