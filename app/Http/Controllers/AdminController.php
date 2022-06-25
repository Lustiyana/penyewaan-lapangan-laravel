<?php

namespace App\Http\Controllers;

use App\Models\Lapangan;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function lapangan(){
        return view('admin/lapangan/index');
    }
    public function transaksi(){
        return view('admin/transaksi/index');
    }
    public function create_lapangan(){
        $data['title'] = 'Login';
        return view('admin/lapangan/create', $data);
    }
    public function create_lapangan_action(Request $request){
        $request->validate([
            'kode_lapangan'=>'required',
            'harga_sewa'=>'required',
            'jam_mulai'=>'required',
            'jam_selesai'=>'required',
            'status'=>'required',
        ]);

        $data_lapangan = new Lapangan([
            'kode_lapangan' => $request->kode_lapangan,
            'harga_sewa' => $request->harga_sewa,
            'jam_mulai' => $request->jam_mulai,
            'jam_selesai' => $request->jam_selesai,
            'status' => $request->status
        ]);
        $data_lapangan->save();
        return redirect()->route('lapangan')->with('success', 'Data telah ditambahkan');
    }
}
