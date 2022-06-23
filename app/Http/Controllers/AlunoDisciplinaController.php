<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AlunoDisciplinaModel;

class AlunoDisciplinaController extends Controller
{
            public function insertDataAlunoDisc(Request $request)
        {
        $randomNumber = random_int(1000, 9999);


        $alunodisciplinamodel = new AlunoDisciplinaModel;

        $alunodisciplinamodel->aluno = $request->aluno;
        $alunodisciplinamodel->disciplina = $request->disciplina;
        $alunodisciplinamodel->id = $randomNumber;
        $data[] = $alunodisciplinamodel;
        $alunodisciplinamodel->insert($data);
        return redirect('/');
    }

}
