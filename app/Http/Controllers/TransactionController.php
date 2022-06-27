<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TransactionController extends Controller
{
    public function transaksi()
    {

        //render view with posts
        return view('transaksi/index');
    }
}
