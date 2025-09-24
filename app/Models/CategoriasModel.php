<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

//Habrá que importar los modelos con los que esté relacionada (eventos
use App\Models\EventosModel;

class CategoriasModel extends Model
{
    use HasFactory;

    protected $table = 'categorias';

    protected $fillable=[
        'nombre',
        'descripcion'
    ];

    //Relación con eventos en donde la misma categoría la pueden tener muchos eventos 1:N
    public function eventos(){
        return $this->hasMany(EventosModel::class);
    }

}
