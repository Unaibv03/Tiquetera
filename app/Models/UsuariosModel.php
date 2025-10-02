<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

use App\Models\ReseniasModel;
use App\Models\RolesModel;

class UsuariosModel extends Authenticable
{
    use HasFactory, Notifiable;

    protected $table = 'usuarios';

    protected $fillable=[
        'nombre',
        'password',
        'email',
        'rol_id'
    ];

    //Relación 1:N con roles
    public function rol(){
        return $this->belongsTo(RolesModel::class);
    }

    //Relación 1:N con reseñas
    public function resenias(){
        return $this->hasMany(ReseniasModel::class);
    }

    //Relación 1:N con entradas
    public function entradas(){
        return $this->hasMany(EntradasModel::class);
    }

}
