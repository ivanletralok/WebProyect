<?php
 
    Use Illuminate\Database\Eloquent\Model;
    
 class programa extends Model{
     protected $table = 'programa';
 
     public $timestamps = false;
 
     protected $fillable = [
         'id_programa',
         'nombre',
         'id_facultad',
     ];
 }