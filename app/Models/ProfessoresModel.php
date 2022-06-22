<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ProfessoresModel extends Model
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

        public function insert($data){
        return $this->save($data);
    }

}
