<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Atividade extends Model
{
    use HasFactory;

    protected $table = 'atividades';

    public function solicitacao() {
        return $this->belongsTo(Solicitacao::class, 'id_solicitacao', 'id');
    }

    public function disciplina() {
        return $this->belongsTo(Disciplina::class, 'id_disciplina', 'id');
    }

    public function comprovante() {
        return $this->hasOne(Comprovante::class, 'id_atividade', 'id');
    }
}
