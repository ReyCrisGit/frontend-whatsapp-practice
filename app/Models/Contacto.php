<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Contacto extends Model
{
    use HasFactory;

    protected $table = "contactos";

    public function cuenta(): BelongsTo {
        return $this->belongsTo(Cuenta::class);
    }

    public function comunidades(): BelongsToMany {
        return $this->belongsToMany(Comunidad::class, 'comunidad_contacto', 'contacto_id', 'comunidad_id')->withTimestamps();
    }

    public function grupos(): BelongsToMany {
        return $this->belongsToMany(Grupo::class, 'contacto_grupo', 'contacto_id', 'grupo_id')->withTimestamps();
    }

    protected $fillble = [
        'nombre',
        'apellido',
        'foto',
        'numero_celular',
        'pais',
        'cuenta_id'
    ];
}
