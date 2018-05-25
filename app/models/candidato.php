<?php

Use Illuminate\Database\Eloquent\Model;
    
class candidatos extends Model{
    protected $table = 'candidato';

    public $timestamps = false;

    protected $fillable = [
        'id_candidato',
        'numero',
        'id_organo',
        'foto',
    ];
}