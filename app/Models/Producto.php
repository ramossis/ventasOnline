<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;
    public function categoria(){
        return $this->belongsTo('App\Models\Categoria');
    }
    public function pedidos(){
        return $this->belongsToMany('App\Models\Pedido');
    }
}
