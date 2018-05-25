<?php


    Use Illuminate\Database\Eloquent\Model;
    
class organo extends Model{
    protected $table = 'organo';

    public $timestamps = false;

    protected $fillable = [
        'id_organo',
        'nombre',
        'descripcion',
    ];
}