<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Advertencia extends Model
{
    use HasFactory;

    protected $table = 'advertencias';

    public function tipoAdvertencia() {
        return $this->belongsTo(TipoAdvertencia::class,'id_tipo', 'id' );
    }

    public function aluno() {
        return $this->belongsTo(Aluno::class, 'matricula', 'matricula');
    }
}
