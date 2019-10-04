<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class usuario_periodo extends Model
{
    protected $able = "usuario_periodos";

    protected $fillable = ['id','user_id','periodo_id'];
    
}
