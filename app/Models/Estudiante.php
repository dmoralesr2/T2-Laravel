<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Estudiante extends Model
{
    use HasFactory;

    protected $table = 'estudiantes';
    protected $primaryKey = 'id_estudiante';
    protected $fillable = [ 'carne', 'nombres', 'apellidos', 'direccion', 'telefono', 'correo_electronico', 'id_tipo_sangre', 'fecha_nacimiento' ];

    public function tipo_sangre()
    {
        return $this->belongsTo(TipoSangre::class, 'id_tipo_sangre');
    }
}
