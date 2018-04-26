<?php

    use Illuminate\Database\Eloquent\Model;

    class Usuario extends Model{
        protected $table = 'usuario';

        protected $fillable = [
            
            'codigo',
            'nombre1',
            'nombre2',
            'apellido1',
            'apellido2',
            'Rol_idrol',
            'estado',
            'password',
           
        ];
    }   