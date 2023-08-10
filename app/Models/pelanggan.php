<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pelanggan extends Model
{
    use HasFactory;

    protected $table = 'pelanggan';
    protected $fillable = [
        'nama_lengkap',
        'jenis_kelamin',
        'nomor_hp',
        'alamat_email',
        'foto_pelanggan'
    ];

public function getFotoPelangganAttribute()
        {
            $foto_pelanggan = $this->attributes['foto_pelanggan'];
            if (empty($foto_pelanggan)) return 'https://via.placeholder.com/100?text-Pelanggan';
              else return Storage::url('pelanggan/' . $foto_pelanggan);  
        }
}
