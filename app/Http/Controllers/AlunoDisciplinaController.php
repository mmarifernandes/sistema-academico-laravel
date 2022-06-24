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
        return redirect('/alunoperfil/'.$data[0]['aluno'].'');
    }


      public function editNota($coddisc, $id)
   {
        $alunodisciplinamodel = new AlunoDisciplinaModel;
        $data['all'] = $alunodisciplinamodel->getall($coddisc, $id);
        return view('formnotas', $data);
    }

               public function insertNotaAluno(Request $request)
        {

        $alunodisciplinamodel = new AlunoDisciplinaModel;

        $alunodisciplinamodel->nota = $request->nota;
        $alunodisciplinamodel->aluno = $request->aluno;
        $alunodisciplinamodel->disciplina = $request->disciplina;

        $data[] = $alunodisciplinamodel;
        print_r($data);
        $alunodisciplinamodel->updatenota($data);
        return redirect('/alunoperfil/'.$data[0]['aluno'].'');

    }




      public function editFreq($coddisc, $id)
   {
        $alunodisciplinamodel = new AlunoDisciplinaModel;
        $data['all'] = $alunodisciplinamodel->getall($coddisc, $id);
        return view('formfreq', $data);
    }

               public function insertFreqAluno(Request $request)
        {

        $alunodisciplinamodel = new AlunoDisciplinaModel;

        $alunodisciplinamodel->frequencia = $request->frequencia;
        $alunodisciplinamodel->aluno = $request->aluno;
        $alunodisciplinamodel->disciplina = $request->disciplina;

        $data[] = $alunodisciplinamodel;
        print_r($data);
        $alunodisciplinamodel->updatefreq($data);
        return redirect('/alunoperfil/'.$data[0]['aluno'].'');

    }


}
