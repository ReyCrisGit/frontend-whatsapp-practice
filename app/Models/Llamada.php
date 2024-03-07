<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
//use Illuminate\Database\Eloquent\Relations\BelongsToMany;

/* class Llamada extends Model
{
    use HasFactory;

    protected $table = "llamadas";

    public function cuentas(): BelongsToMany {
        return $this->belongToMany(Cuenta::class, 'llamadas', 'contacto_id', 'cuenta_id')->withPivot('fecha');
    }

    protected $fillable = [
        'fecha',
    ];
} */

class Llamada extends Model
{
    use HasFactory;

    protected $table = "llamadas";

    public function cuenta()
    {
        return $this->belongsTo(Cuenta::class, 'cuenta_id');
    }

    public function contacto()
    {
        return $this->belongsTo(Contacto::class, 'contacto_id');
    }

    protected $fillable = [
        'fecha',
    ];
}
