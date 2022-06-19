<?php

namespace sistemaacademico;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class AlunoDisciplna extends Model
{
    protected $fillable = [
        'id',
        'aluno',
        'disciplina',
    ];

    protected $table = 'alunosdisciplina';

    public function aluno(){
        return $this->belongsTo(Alunos::class,'id');
    }
}
