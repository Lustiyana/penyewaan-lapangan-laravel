<?php

namespace App\Http\Controllers;

use App\Models\Lapangan;
use Illuminate\Http\Request;

class LapanganController extends Controller
{
    public function index()
    {
        //get posts
        $lapangan = Lapangan::latest()->paginate(5);

        //render view with posts
        return view('admin/lapangan.index', compact('lapangan'));
    }
}
