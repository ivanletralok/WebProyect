<?php

    Use Illuminate\Database\Eloquent\Model;
    
class lugar extends Model{
    protected $table = 'lugar';

    public $timestamps = false;

    protected $fillable = [
        'id_lugar',
        'nombre',
    ];
}