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
}
