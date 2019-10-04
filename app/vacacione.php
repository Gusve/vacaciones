<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class vacaciones extends Model
{
    protected $able = "usuario_periodos";

    protected $fillable = ['id','user_periodo_id','fecha_i','fecha_f','dias_t'];
}
