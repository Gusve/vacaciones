<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class usuario_periodo extends Model
{
    protected $table = "usuario_periodos";

    protected $fillable = ['id','user_id','periodo_id'];
    
}
