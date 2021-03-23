<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Disciplina extends Model
{
    use HasFactory;

    protected $table = 'disciplinas';

    public function atividade() {
        return $this->hasMany(Atividade::class, 'id_disciplina', 'id');
    }

    public function boletim() {
        return $this->hasMany(Boletim::class, 'id_disciplina', 'id');
    }

    public function categoriaDisciplina() {
        return $this->belongsTo(CategoriaDisciplina::class, 'id_categoria', 'id');
    }
}
