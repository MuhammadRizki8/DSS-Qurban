<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alternatif extends Model
{
    use HasFactory;

    protected $table = 'alternatifs'; // Pastikan nama tabel sesuai
    protected $fillable = ['kode_alternatif', 'nama_alternatif', 'foto'];

    public function penilaians()
    {
        return $this->hasMany(Penilaian::class, 'id_alternatif');
    }
}