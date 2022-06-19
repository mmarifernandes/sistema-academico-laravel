<?php

namespace sistemaacademico;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Professores extends Model
{
    protected $fillable = [
        'codigo',
        'nome',
        'email',
    ];

    protected $table = 'professores';

    public function aluno(){
        return $this->belongsTo(Alunos::class,'codigo');
    }
}
