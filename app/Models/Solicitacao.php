<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Solicitacao extends Model
{
    use HasFactory;

    protected $fillable = ['id',
                            'matricula',
                            'endereco',
                            'responsavel',
                            'telefone_responsavel'
                            ];

    protected $table = 'solicitacoes';

    public function aluno() {
        return $this->belongsTo(Aluno::class, 'matricula', 'matricula');
    }

    public function atividade() {
        return $this->hasOne(Atividade::class, 'id_solicitacao', 'id');
    }
}
