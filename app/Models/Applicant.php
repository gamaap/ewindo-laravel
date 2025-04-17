<?php

namespace App\Models;

use App\Models\Education;
use App\Models\Experience;
use Illuminate\Database\Eloquent\Model;

class Applicant extends Model
{
    protected $fillable = ['job_id', 'nik', 'nama', 'email', 'jenis_kelamin', 'nohp', 'tanggal_lahir', 'status_menikah', 'status', 'country'];

    public function job()
    {
        return $this->belongsTo(Job::class); // Relasi ke job
    }

    public function education()
    {
        return $this->hasOne(Education::class);
    }

    public function alamatKtp()
    {
        return $this->hasOne(AlamatKtp::class);
    }

    public function alamatDomisili()
    {
        return $this->hasOne(AlamatDomisili::class);
    }
    public function experience()
{
    return $this->hasMany(Experience::class);
}
public function skill()
    {
        return $this->hasOne(Skill::class);
    }

}
