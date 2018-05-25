<?php

Use Illuminate\Database\Eloquent\Model;
    
class facultad extends Model{
    protected $table = 'facultad';

    public $timestamps = false;

    protected $fillable = [
        'id_facultad',
        'nombre',
    ];
}