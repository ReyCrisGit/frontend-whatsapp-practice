<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Llamada extends Model
{
    use HasFactory;

    protected $table = "llamadas";

    public function cuentas(): BelongsToMany {
        return $this->belongToMany(Cuenta::class, 'llamadas', 'contacto_id', 'cuenta_id')->withPivot('fecha');
    }

    protected $fillable = [
        'fecha',
    ];
}
