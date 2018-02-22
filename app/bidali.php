<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class bidali extends Model
{
    protected $table= "bidali";
    
    protected $fillable= ['id_bid','bezero_id','lote_id', 'data','kopurua'];
}
