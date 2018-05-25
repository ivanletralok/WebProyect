<?php

    Use Illuminate\Database\Eloquent\Model;
    
class mesa extends Model{
    protected $table = 'mesa';

    public $timestamps = false;

    protected $fillable = [
        'id_mesa',
        'nombre',
        'id_lugar',
    ];
}