<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Foto extends Model
{
    use HasFactory;

    protected $table = 'fotos';

    protected $fillable = [
        'matricula',
        'url'
    ];

    public function aluno() {
        return $this->belongsTo(Aluno::class, 'matricula', 'matricula');
    }
}
