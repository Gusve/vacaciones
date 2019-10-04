<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class usuario_detalle extends Model
{
    protected $able = "usuario_detalles";

    protected $fillable = ['id','user_id','cargo_id','area_id'];
}
