<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Chat extends Model
{
    use HasFactory;

    protected $table = "chats";

    public function cuentas(): BelongsToMany {
        return $this->belongsToMany(Cuenta::class, 'contactos', 'contacto_id', 'cuenta_id')->withPivot('fecha_ultimo_mensaje');
    }

    protected $fillable = [
        'mensaje',
        'fecha',
    ];
}
