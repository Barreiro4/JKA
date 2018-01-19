<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class langileak extends Model
{
    protected $table= "langileak";
    
    protected $fillable=['langile_id', 'izena', 'abizena', 'dpto', 'arduraduna'];
    
    public function lana()
    {
        return $this->hasMany('App\lana');
    }
}
