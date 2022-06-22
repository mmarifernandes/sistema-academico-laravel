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
            $disciplinas->select('*','disciplinas.nome as nomed', 'professores.nome as nomep');
            return $disciplinas->get();
    }

}
