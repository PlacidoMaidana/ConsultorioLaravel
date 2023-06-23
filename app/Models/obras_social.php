<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class obras_social extends Model
{
    protected $table = 'obras_sociales';
    protected $fillable = ['nombreOSocial'];

    public function pacientes()
    {
        return $this->hasMany(Paciente::class, 'obraSocialId');
    }

}
