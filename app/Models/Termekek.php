<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Termekek extends Model
{
    use HasFactory;

    protected $visible = [
        'termek_id',
        'termek_nev',
        'ar',
        'mennyiseg',
        'elerheto-e',
    ];
}
