<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AnotacaoTurma extends Model
{
    use HasFactory;

    protected $fillable = ['id',
                            'anotacao',
                            'descricao',
                            'obervacao',
                            'data',
                            'id_turma'
                            ];

    protected $table = 'anotacoes_turma';

    public function turma() {
        return $this->belongsTo(Turma::class, 'id_turma', 'id');
    }
}
