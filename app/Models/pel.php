<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pel extends Model
{
    use HasFactory;

    protected $table = 'pel';

    protected $fillable = [
        'pel',
        'kode',
        'deskripsi',
    ];
}
