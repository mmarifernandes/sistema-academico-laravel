<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class AlunoDisciplinaModel extends Model
{
    protected $fillable = [
        'id',
        'aluno',
        'disciplina',
        'nota',
        'frequencia'
    ];

    protected $table = 'AlunoDisciplina';

    public function aluno(){
        return $this->belongsTo(Alunos::class,'id');
    }

       public function insert($data){
        return $this->save($data);
    }
}
