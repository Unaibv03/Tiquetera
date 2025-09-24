<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

use App\Models\LugaresModel;
use App\Models\CategoriasModel;
use App\Models\EntradasModel;
use App\Models\ReseniasModel;

class EventosModel extends Model
{
    use HasFactory;

    protected $table = 'eventos';

    protected $fillable=[
        'nombre',
        'fechayHora',
        'precio',
        'lugar_id',
        'categoria_id'
    ];

    //Relación con categorias 1:N con lugares
    public function lugar(){
        return $this->belongsTo(LugaresModel::class);
    }
    
    //Relación con categorias 1:N con categorias
    public function categoria(){
        return $this->belongsTo(CategoriasModel::class);
    }

    //1:N con reseñas
    public function resenias(){
        return $this->hasMany(ReseniasModel::class);
    }

    //Relación 1:N con entradas
    public function entradas(){
        return $this->hasMany(EntradasModel::class);
    }

}
