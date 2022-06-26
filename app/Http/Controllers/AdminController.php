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
            'jam_booking'=>'required',
            'status'=>'required',
        ]);

        $lapangan = new Lapangan([
            'kode_lapangan' => $request->kode_lapangan,
            'harga_sewa' => $request->harga_sewa,
            'jam_booking' => $request->jam_booking,
            'status' => $request->status
        ]);
        $lapangan->save();
        return redirect()->route('lapangan')->with('success', 'Data telah ditambahkan');

    }
}
