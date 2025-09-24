<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

use App\Models\UsuariosModel;
use App\Models\EventosModel;

class ReseniasModel extends Model
{
    use HasFactory;

    protected $table = 'resenias';

    protected $fillable=[
        'comentario',
        'puntuacion',
        'usuario_id',
        'evento_id'
    ];

    //Relación 1:N con usuarios
    public function usuario(){
        return $this->belongsTo(UsuariosModel::class);
    }

    //Relación 1:N con eventos
    public function evento(){
        return $this->belongsTo(EventosModel::class);
    }

}
