<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Anotacao_turma extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'anotacao_turma';
}
