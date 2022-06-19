<?php

namespace sistemaacademico;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Disciplinas extends Model
{
    protected $fillable = [
        'codigo',
        'nome',
        'professor',
        'cargahoraria',
    ];

    protected $table = 'disciplinas';

    public function aluno(){
        return $this->belongsTo(Alunos::class,'codigo');
    }
}
