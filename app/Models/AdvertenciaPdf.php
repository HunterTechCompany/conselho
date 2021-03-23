<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdvertenciaPdf extends Model
{
    use HasFactory;

    protected $table = 'advertencias_pdf';

    public function aluno() {
        return $this->belongsTo(Aluno::class, 'matricula', 'matricula');
    }
}
