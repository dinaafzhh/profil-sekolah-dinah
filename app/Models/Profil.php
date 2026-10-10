<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Profil extends Model
{
    protected $table = 'profils';

    protected $primaryKey = 'id_profil';

    public $incrementing = true;

    protected $keyType = 'int';

    protected $fillable = [
        'nama_sekolah',
        'tahun_berdiri',
        'npsn',
        'alamat',
        'kontak',
        'deskripsi',
        'visi_misi',
        'kepala_sekolah',
        'foto',
    ];

    protected $casts = [
        'tahun_berdiri' => 'integer',
    ];
}