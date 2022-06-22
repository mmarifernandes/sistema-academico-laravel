<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class AlunosModel extends Model
{
    protected $fillable = [
        'matricula',
        'nome',
        'email',
    ];

    protected $table = 'alunos';

    public function aluno(){
        return $this->belongsTo(Alunos::class,'matricula');
    }

    public function insert($data){
        return $this->save($data);
    }

        public function getaluno($id)
    {
            $disciplinas = AlunosModel::where('matricula', '=', $id);
            return $disciplinas->first('*');
    }
    public function getalunodisc($id)
    {
            $disciplinas = AlunosModel::join('alunodisciplina', 'alunodisciplina.aluno', '=', 'alunos.matricula');
            $disciplinas->join('disciplinas', 'disciplinas.codigo', '=', 'alunodisciplina.disciplina');
            $disciplinas->where('matricula', '=', $id);
            return $disciplinas->get();
    }
}
