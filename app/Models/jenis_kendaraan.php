<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class jenis_kendaraan extends Model
{
    use HasFactory;

    protected $table = 'jenis_kendaraan';
    
    protected $fillable =[
        'id_jenis_kendaraan',
        'nama_jenis_kendaraan',
    ];

    
    public function kendaraan():HasMany{
        return $this->hasMany(kendaraan::class);
    }

}
