<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengurus extends Model
{
    use HasFactory;

    // Menentukan nama tabel secara eksplisit
    protected $table = 'pengurus';

    protected $fillable = [
        'id_user',
        'nama',
        'jabatan',
        'foto',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
