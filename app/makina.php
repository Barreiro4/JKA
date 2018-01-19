<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class makina extends Model
{
    //
    protected $table= "makina";
    
    protected $fillable = ['makina_id', 'izena'];
    
    public function makina()
    {
        return $this->hasMany('App\lana');
    }
}
