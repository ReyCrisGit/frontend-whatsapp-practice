<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Grupo extends Model
{
    use HasFactory;

    protected $table = "grupos";

    public function cuenta(): BelongsTo {
        return $this->belongsTo(Cuenta::class, 'administrador_id');
    }

    public function comunidades(): BelongsToMany {
        return $this->belongsToMany(Comunidad::class, 'comunidad_grupo', 'grupo_id', 'comunidad_id')->withTimestamps();
    }

    public function contactos(): BelongsToMany {
        return $this->belongsToMany(Contacto::class, 'contacto_grupo', 'grupo_id', 'contacto_id')->withTimestamps();
    }

    protected $fillable = [
        'nombre',
        'foto',
        'descripcion',
    ];
}
