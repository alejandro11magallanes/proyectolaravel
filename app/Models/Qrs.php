<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Qrs extends Model
{
    use HasFactory;
    protected $fillable = [
        'Qr',
        'activo',
        'user_id',
    ];
}

