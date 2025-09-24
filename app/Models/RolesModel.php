<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\UsuariosModel;

class RolesModel extends Model
{
    use HasFactory;

    protected $table = 'roles';

    protected $fillable=[
        'nombre',
        'descripcion'
    ];

    //Relación 1:N con usuarios
    public function usuarios(){
        return $this->hasMany(UsuariosModel::class);
    }
}
