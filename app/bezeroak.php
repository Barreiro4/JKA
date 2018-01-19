<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class bezeroak extends Model
{
    protected $table= "bezeroak";
    
    protected $fillable= ['bezero_id', 'izena', 'helbidea'];
    
    public function loteak()
    {
        return $this->belongsToMany('App\lote');
    }
}
