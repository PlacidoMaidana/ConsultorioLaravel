<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pacientes extends Model
{
    protected $table = 'pacientes';
    protected $fillable = [
        'dni',
        'nombre',
        'apellido',
        'direccion',
        'telefono',
        'email',
        'fechaNacimiento',
        'obraSocialId'
    ];

    public function obraSocial()
    {
        return $this->belongsTo(ObrasSociales::class, 'obraSocialId');
    }

   /* public function historiasClinicas()
    {
        return $this->hasMany(HistoriaClinica::class, 'pacienteId');
    }*/

}
