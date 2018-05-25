<?php

    Use Illuminate\Database\Eloquent\Model;
    
class estado_usuario extends Model{
    protected $table = 'estado_usuario';

    public $timestamps = false;

    protected $fillable = [
        'id_estado_usuario',
        'nombre',
        'descripcion',
    ];
}