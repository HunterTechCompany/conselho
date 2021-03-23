<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Boletim extends Model
{
    use HasFactory;

    protected $fillable = [
        'matricula',
        'id_disciplina',
        'id_bimestre',
        'id_turma',
        'aulas_ministradas',
        'faltas',
        'nota'
    ];

    protected $table = 'boletins';

    public function aluno() {
        return $this->belongsTo(Aluno::class, 'matricula', 'matricula');
    }

    public function bimestre() {
        return $this->belongsTo(Bimestre::class, 'id_bimestre', 'id');
    }

    public function turma() {
        return $this->belongsTo(Turma::class, 'id_turma', 'id');
    }

    public function disciplina() {
        return $this->belongsTo(Turma::class, 'id_disciplina', 'id');
    }
}
