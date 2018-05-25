<?php

    use Illuminate\Database\Eloquent\Model;

    class Usuario extends Model{
        protected $table = 'usuario';

        public $timestamps = false;

        protected $fillable = [
            
            'codigo',
            'nombre1',
            'nombre2',
            'apellido1',
            'apellido2',
            'password',
            'id_tipo_usuario',
            'id_rol',
            'id_programa',
            'id_mesa',
            'id_estado_usuario',
            'candidatos_id',
           
        ];
    }   