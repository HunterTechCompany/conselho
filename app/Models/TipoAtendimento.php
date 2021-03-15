<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipoAtendimento extends Model
{
    use HasFactory;

    protected $table = 'tipos_atendimento';

    public function atendimento() {
        return $this->hasMany(Atendimento::class, 'id_tipo', 'id');
    }

}
