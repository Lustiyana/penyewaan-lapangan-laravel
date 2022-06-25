<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lapangan extends Model
{
    use HasFactory;
    
    protected $table = 'lapangan';
    protected $primaryKey = 'lapangan_id';
    protected $fillable = ['kode_lapangan', 'harga_sewa','jam_mulai', 'jam_selesai', 'status'];
}
