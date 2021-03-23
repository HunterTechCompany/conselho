<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aluno extends Model
{
    use HasFactory;

    protected $primaryKey = 'matricula';

    protected $fillable = [
        'matricula',
        'nome',
        'email',
        'telefone',
        'pai',
        'mae',
        'status',
        'id_turma'
    ];

    protected $table = 'alunos';

    public function advertencia() {
        return $this->hasMany(Advertencia::class, 'matricula', 'matricula');
    }

    public function advertenciaPdf() {
        return $this->hasMany(AdvertenciaPdf::class, 'matricula', 'matricula');
    }

    public function atendimento() {
        return $this->hasMany(Atendimento::class, 'matricula', 'matricula');
    }

    public function solicitacao() {
        return $this->hasMany(Solicitacao::class, 'matricula', 'matricula');
    }

    public function foto() {
        return $this->hasOne(Foto::class, 'matricula', 'matricula');
    }

    public function boletim() {
        return $this->hasMany(Boletim::class, 'matricula', 'matricula');
    }

    public function turma() {
        return $this->belongsTo(Turma::class, 'id_turma', 'id');
    }
}
