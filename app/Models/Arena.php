<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Arena extends Model
{
    use HasFactory;
    protected $primaryKey = 'arena_id';
    protected $fillable = ['arena_code', 'price','time', 'status'];
}
