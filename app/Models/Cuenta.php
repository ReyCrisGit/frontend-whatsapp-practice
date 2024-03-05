<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Cuenta extends Model
{
    use HasFactory;

    protected $table = "cuentas";

    public function comunidades(): HasMany {
        return $this->hasMany(Comunidad::class);
    }

    public function grupos(): HasMany {
        return $this->hasMany(Grupo::class);
    }

    public function chats(): BelongsToMany {
        return $this->belongsToMany(Chat::class, 'contactos', 'cuenta_id', 'contacto_id')->withPivot('fecha');
    }

    public function llamadas(): BelongsToMany {
        return $this->belongsToMany(Llamada::class, 'llamadas', 'cuenta_id', 'contacto_id')->withPivot('fecha');
    }

    public function contactos(): HasMany {
        return $this->hasMany(Contacto::class);
    }

    protected $fillable = [
        'nombre',
        'apellido',
        'correo',
        'numero_celular',
        'foto',
        'contrasenia',
        'tipo',
    ];
}
