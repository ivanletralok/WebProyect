<?php

    Use Illuminate\Database\Eloquent\Model;
    
class tipo_usuario extends Model{
    protected $table = 'tipo_usuario';

    public $timestamps = false;

    protected $fillable = [
        'id_tipo_usuario',
        'nombre',
        'descripcion',
    ];
}