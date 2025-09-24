<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

use App\Models\ReseniasModel;
use App\Models\RolesModel;

class UsuariosModel extends Model
{
    use HasFactory;

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
