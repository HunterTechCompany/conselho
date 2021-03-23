<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoriaDisciplina extends Model
{
    use HasFactory;

    protected $table = 'categoria_disciplina';

    public function disciplina() {
        return $this->hasMany(Disciplina::class, 'id_categoria', 'id');
    }
}
