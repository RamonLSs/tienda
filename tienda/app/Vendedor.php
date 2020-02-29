<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vendedor extends Model
{
    protected $fillable = ['nombre','apellidos','edad','ventas','imagen'];


    public function scopeName($query, $name='') {
        if (trim($name) != '') {
            $this->_searchName = $name;
            $query->Where(function($query) {
                $name = $this->_searchName;
                    $query->Where("nombre","like","%$name%");
            });
        }
        return $query;
    }


    // public function scopeMayor($query, $v){
    //     if(!isset($v))
    // }
}
