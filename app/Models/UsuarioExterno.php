<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Persona;

class UsuarioExterno extends Model
{
    protected $table = 'usuario_externo';
    protected $primaryKey = 'id_usuario_externo'; // solo si no es id por defecto
    public $timestamps = false;

    protected $fillable = [
        'organizacion',
        'comercial',
        'representante',
        'nombre_representante',
        'cargo_representante',
        'tipo_organizacion',
        'firma_nombre',
        'estado',
        'fecha_registro',
        'fecha_envio',
        'id_persona',
        'sector'
    ];

    // Relación con Persona
    public function persona()
    {
        return $this->belongsTo(Persona::class, 'id_persona');
    }
}

