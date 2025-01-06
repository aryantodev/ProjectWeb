<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RawatInap extends Model {
    protected $table = 'rawat_inap';
    protected $fillable = [
        'nama',
        'email',
        'telepon',
        'tanggalCheckIn',
        'tanggalCheckOut',
        'tipeKamar',
        'harga',
        'jumlahTamu',
        'catatan',
    ];
}
