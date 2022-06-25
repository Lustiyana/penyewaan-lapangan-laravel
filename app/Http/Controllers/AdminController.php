<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function lapangan(){
        return view('admin/lapangan/index');
    }
    public function transaksi(){
        return view('admin/transaksi/index');
    }
}
