<?php

namespace App\Models;
use App\Models\DB;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class DisciplinasModel extends Model
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

            public function insert($data){
        return $this->save($data);
    }

    public function disciplinas()
    {
            $disciplinas = DisciplinasModel::join('professores', 'professores.codigo', '=', 'disciplinas.professor');
            $disciplinas->select('*','disciplinas.nome as nomed', 'professores.nome as nomep', 'disciplinas.codigo as codigod');
            return $disciplinas->get();
    }


         public function getprofdisc($id)
    {
            $disciplinas = DisciplinasModel::where('professor', '=', $id);
            return $disciplinas->get();
    }
         public function getdisciplina($id)
    {
            $disciplinas = DisciplinasModel::where('codigo', '=', $id);
            return $disciplinas->first();
    }

                        public function notin($id)
    {
            $alunos = DisciplinasModel::leftjoin('alunodisciplina', 'disciplinas.codigo', '=', 'alunodisciplina.disciplina');
            $alunos->leftjoin('alunos', 'alunos.matricula', '=', 'alunodisciplina.aluno');
            $alunos->select('disciplinas.nome as nomed', 'disciplinas.cargahoraria', 'disciplinas.codigo');
            $alunos->whereNotIn('disciplinas.codigo', function($q)use($id){$q->from('alunodisciplina')->select('disciplina')->where('aluno', '=', $id);})->groupBy('disciplinas.codigo');
            return $alunos->get();
    }

    public function totalch($id){
            $alunos = DisciplinasModel::join('alunodisciplina', 'disciplinas.codigo', '=', 'alunodisciplina.disciplina');
            $alunos->join('alunos', 'alunos.matricula', '=', 'alunodisciplina.aluno');
            $alunos->select(\DB::raw('SUM(cargahoraria) as total'));
            $alunos->where('aluno', '=', $id);
            $alunos->groupBy('aluno');
            return $alunos->first();
    }
}

