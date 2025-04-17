<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Skill extends Model
{
    use HasFactory;

    protected $table = 'skills'; // Nama tabel
    
    protected $fillable = [
        'applicant_id',
        'keahlian',
    ];

    protected $casts = [
        'keahlian' => 'array', // otomatis decode JSON ke array saat dipanggil
    ];

    // Relasi ke Applicant (jika mau)
    public function applicant()
    {
        return $this->belongsTo(Applicant::class);
    }
}
