<?php

    Use Illuminate\Database\Eloquent\Model;
    
class voto extends Model{
    protected $table = 'voto';

    public $timestamps = false;

    protected $fillable = [
        'id_voto',
        'id_mesa',
        'id_candidato',
        'cantidad',
    ];
}