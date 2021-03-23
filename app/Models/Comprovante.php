<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comprovante extends Model
{
    use HasFactory;

    protected $table = 'comprovantes';

    public function atividade() {
        return $this->belongsTo(Atividade::class, 'id_atividade', 'id');
    }
}
