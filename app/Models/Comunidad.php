<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Comunidad extends Model
{
    use HasFactory;

    protected $table = "comunidades";

    public function cuenta(): BelongsTo {
        return $this->belongsTo(Cuenta::class, 'administrador_id');
    }

    public function grupos(): BelongsToMany {
        return $this->belongsToMany(Grupo::class, 'comunidad_grupo', 'comunidad_id', 'grupo_id')->withTimestamps();
    }

    public function contactos(): BelongsToMany {
        return $this->belongsToMany(Contacto::class, 'comunidad_contacto', 'comunidad_id', 'contacto_id')->withTimestamps();
    }

    protected $fillable = [
        'nombre',
        'foto',
        'descripcion',
    ];
}
