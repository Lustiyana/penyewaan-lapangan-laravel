<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lapangan extends Model
{
    use HasFactory;
    
    protected $fillable = ['kode_lapangan', 'harga_sewa','jam_tersedia', 'status'];
}
