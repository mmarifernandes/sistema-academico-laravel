<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AlunoDisciplinaModel;
use App\Models\DisciplinasModel;

class AlunoDisciplinaController extends Controller
{
            public function insertDataAlunoDisc(Request $request)
        {
        $randomNumber = random_int(1000, 9999);


        $alunodisciplinamodel = new AlunoDisciplinaModel;
        $disciplinasmodel = new DisciplinasModel;

        $alunodisciplinamodel->aluno = $request->aluno;
        $alunodisciplinamodel->disciplina = $request->disciplina;
        $alunodisciplinamodel->id = $randomNumber;
        $data[] = $alunodisciplinamodel;
        $data['totalch'] = $disciplinasmodel->totalch($data[0]['aluno']);
        $data['ch'] = $disciplinasmodel->getdisciplina($data[0]['disciplina']);
        // print_r($data['ch']);
        if($data['totalch']){
        if($data['totalch']['total'] + $data['ch']['cargahoraria'] > 50){
                        return redirect('/error');

        }else{
            $alunodisciplinamodel->insert($data);
            return redirect('/alunoperfil/'.$data[0]['aluno'].'');
            }
        }else{
                    $alunodisciplinamodel->insert($data);
            return redirect('/alunoperfil/'.$data[0]['aluno'].'');
            }
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
        return redirect('/disciplinaperfil/'.$data[0]['disciplina'].'');

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
        return redirect('/disciplinaperfil/'.$data[0]['disciplina'].'');

    }


}
