<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bimestre extends Model
{
    use HasFactory;

    protected $fillable = [
        'bimestre',
        'media_bimestre',
        'media_total'
    ];

    protected $table = 'bimestres';

    public function boletim() {
        return $this->hasMany(Boletim::class, 'id_bimestre', 'id');
    }

    public function turma() {
        return $this->belongsTo(Turma::class, 'id_turma', 'id');
    }
}
