<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class lana extends Model
{
   protected $table= "lana";
   
   protected $fillable= ['lana_id', 'izena', 'langile_id', 'makina_id'];
   
   public function langile()
    {
        return $this->belongsTo('App\langileak');
    }
   
   public function makina()
    {
        return $this->belongsTo('App\makina');
    }
    
   public function loteak()
    {
        return $this->belongsToMany('App\lote');
    }
}
