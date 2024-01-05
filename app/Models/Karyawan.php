<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Karyawan extends Model
{
    use HasFactory;

    protected $guarded = ['nomor_induk'];
    protected $fillable = [
        'nama',
        'alamat',
        'tanggal_lahir',
        'tanggal_bergabung'
    ];

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($karyawan) {
            $karyawan->nomor_induk = 'IP' . now()->format('ym') . str_pad(static::count() + 1, 3, '0', STR_PAD_LEFT);
        });
    }

    public function cutis()
    {
        return $this->hasMany(Cuti::class,'nomor_induk','nomor_induk');
    }
}
