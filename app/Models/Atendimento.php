<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Atendimento extends Model
{
    use HasFactory;

    protected $table = 'atendimentos';

    public function aluno() {
        return $this->belongsTo(Aluno::class, 'materia', 'materia');
    }

    public function tipoAtendimento() {
        return $this->belongsTo(TipoAtendimento::class, 'id_tipo', 'id');
    }
}
