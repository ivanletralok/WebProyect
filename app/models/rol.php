<?php  
    Use Illuminate\Database\Eloquent\Model;
    
    class Rol extends Model{
        protected $table = 'Rol';

        protected $fillable = [
            'idRol',
            'nombre',
            'descripcion',
            'created_at',
            'updated_at'

        ];
    }