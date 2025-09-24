<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

//Habrá que importar los modelos con los que esté relacionada (eventos
use App\Models\EventosModel;

class LugaresModel extends Model
{
    use HasFactory;

    protected $table = 'lugares';

    protected $fillable=[
        'nombre',
        'direccion',
        'capacidad'
    ];

    //Relación con eventos en donde en un mismo lugar se pueden celebrar distintos eventosv 1:N
    public function eventos(){
        return $this->hasMany(EventosModel::class);
    }
}
