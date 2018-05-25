<?php  
    Use Illuminate\Database\Eloquent\Model;
    
    class Rol extends Model{
        protected $table = 'Rol';

        public $timestamps = false;
        
        protected $fillable = [
            'id_rol',
            'nombre',
            'descripcion',

        ];
    }