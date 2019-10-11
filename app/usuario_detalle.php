<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class usuario_detalle extends Model
{

	/**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = "usuario_detalles";

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['id','user_id','cargo_id','area_id'];

    /**
     * pentenece a varios usuarios
     */
    public function users()
    {
        return $this->belongsToMany('App\User');
    }

    /**
     * Pertenece a un cargo
     */
    public function cargo()
    {
        return $this->belongsTo('App\Cargo');
    }

    /**
     * Pertenece a un area
     */
    public function area()
    {
        return $this->belongsTo('App\Area');
    }

}
