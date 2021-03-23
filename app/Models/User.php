<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
<<<<<<< HEAD
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class User extends Model
{
    use HasFactory, Notifiable, Model;
=======
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;
>>>>>>> dd3f2ed796da87ee7bc3443506551bd7ea44297b

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
<<<<<<< HEAD
        'tipo'
=======
>>>>>>> dd3f2ed796da87ee7bc3443506551bd7ea44297b
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
<<<<<<< HEAD

    protected $table = 'users';

    public function turma() {
        return $this->belongsToMany(Turma::class, 'users_turmas', 'id_usuario', 'id_turma');
    }
=======
>>>>>>> dd3f2ed796da87ee7bc3443506551bd7ea44297b
}
