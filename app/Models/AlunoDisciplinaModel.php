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


        public function getall($coddisc, $id)
    {
            $search = AlunoDisciplinaModel::where('aluno', '=', $coddisc);
            $search->where('disciplina', '=', $id);
            return $search->get('*');
    }
            public function updatenota($data)
    {
            $nota = AlunoDisciplinaModel::where('aluno', '=', $data[0]['aluno']);
            $nota->where('disciplina', '=', $data[0]['disciplina']);
            return $nota->update(['nota' => $data[0]['nota']]);
    }
                public function updatefreq($data)
    {
            $nota = AlunoDisciplinaModel::where('aluno', '=', $data[0]['aluno']);
            $nota->where('disciplina', '=', $data[0]['disciplina']);
            return $nota->update(['frequencia' => $data[0]['frequencia']]);
    }
                    public function getalunos($id)
    {
            $alunos = AlunoDisciplinaModel::join('disciplinas', 'disciplinas.codigo', '=', 'alunodisciplina.disciplina');
            $alunos->join('alunos', 'alunos.matricula', '=', 'alunodisciplina.aluno');
            $alunos->where('professor', '=', $id);
            $alunos->groupBy('aluno');
            return $alunos->get();
    }

                  public function getalunos2($id)
    {
            $alunos = AlunoDisciplinaModel::join('disciplinas', 'disciplinas.codigo', '=', 'alunodisciplina.disciplina');
            $alunos->join('alunos', 'alunos.matricula', '=', 'alunodisciplina.aluno');
            $alunos->where('disciplina', '=', $id);
            return $alunos->get();
    }


}
