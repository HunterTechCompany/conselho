<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipoAdvertencia extends Model
{
    use HasFactory;

    protected $table = 'tipos_advertencia';

    public function advertencias() {
        return $this->hasMany(Advertencia::class, 'id_tipo', 'id');
    }
}
