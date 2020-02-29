<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Articulo extends Model
{
    protected $fillable = ['nombre','precio','stock','imagen','categoria_id'];

     public function categoria(){
         return $this->belongsTo(Categoria::class);
     }


    public function scopePrecio($query, $num){
        switch($num){
            case '%':
                return $query->where('precio','like','%');
            case 1:
                return $query->where('precio','<=',20);
            case 2:
                return $query->where('precio','>',20)->where('precio','<=',50);
             case 3:
                return $query->where('precio','>',50);
        }
    }
}
