<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class absenMasuk extends Model
{
    use HasFactory;
    // protected $table = ['jam_masuk', 'id_user', 'tanggal', 'lokasi'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
