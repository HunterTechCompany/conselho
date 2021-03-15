<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Turma extends Model
{
    use HasFactory;

    protected $fillable = ['id',
                            'id_curso',
                            'turma',
                            'ano',
                            'modalidade',
                            'status'
                            ];

    protected $table = 'turmas';

    public function aluno() {
        return $this->hasMany(Aluno::class, 'id_turma', 'id');
    }

    public function anotacao_turma() {
        return $this->hasMany(Turma::class, 'id_turma', 'id');
    }

    public function boletim() {
        return $this->hasMany(Boletim::class, 'id_turma', 'id');
    }

    public function curso() {
        return $this->belongsTo(Curso::class, 'id_curso', 'id');
    }

    public function user() {
        return $this->belongsToMany(User::class, 'users_turmas', 'id_turma', 'id_usuario');
    }

    public function bimestre() {
        return $this->hasMany(Bimestre::class, 'id_turma', 'id');
    }
}
