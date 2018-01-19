<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class bidali extends Model
{
    protected $table= "bidali";
    
    protected $fillable= ['lote_id', 'bezero_id', 'data'];
}
