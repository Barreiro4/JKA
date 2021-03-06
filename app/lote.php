<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class lote extends Model
{
    protected $table= "loteak";
    
    protected $fillable = ['lote_id', 'arduraduna', 'materiala', 'hasiera_data', 'bukaera_data', 'emaitza','almazen_kokapena', 'kopurua'];
    
    public function lanak()
    {
        return $this->belongsToMany('App\lana');
    }
    
    public function bezeroak()
    {
        return $this->belongsToMany('App\bezeroak');
    }
    
    
}
