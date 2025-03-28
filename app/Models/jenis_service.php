<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class jenis_service extends Model
{
    use HasFactory;
    protected $table = 'jenis_service';

    protected $fillable  = [
        'id_jenis_service',
        'jenis_service',
        'keterangan',
    ];
}
