<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AnggotaKeluarga extends Model
{
    use HasFactory;

    protected $fillable = [
        'kepala_keluarga_id', 'nama', 'jeniskelamin', 'tanggallahir', 'tempatlahir', 'baptis', 'sidi', 'alamat', 'notelpon'
    ];

    public function kepalaKeluarga()
    {
        return $this->belongsTo(KepalaKeluarga::class);
    }
}
