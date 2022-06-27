<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DisciplinasModel;
use App\Models\ProfessoresModel;
use App\Models\AlunoDisciplinaModel;

class DisciplinasController extends Controller
{

   public function registrationDisc()
   {
          $professoresmodel = new ProfessoresModel;
        $data['all'] = $professoresmodel->get();
        $data['professores'] = $data['all'];
        return view('formregisterdisc', $data);
    }


        public function insertDataDisciplina(Request $request)
        {

        $randomNumber = random_int(10000000, 99999999);


        $disciplinasmodel = new DisciplinasModel;

        $disciplinasmodel->nome = $request->nome;
        $disciplinasmodel->cargahoraria = $request->cargah;
        $disciplinasmodel->codigo = $randomNumber;
        $disciplinasmodel->professor = $request->professor;

        $data[] = $disciplinasmodel;
        $disciplinasmodel->insert($data);
        return redirect('/disciplinasview');

    }




      public function disciplinasview(){
          $professoresmodel = new ProfessoresModel;
          $disciplinasmodel = new DisciplinasModel;
          $data['all'] = $disciplinasmodel->disciplinas();
          $data['disciplinas'] = $data['all'];
        return view ('disciplinas',$data);
    }


             public function disciplinaPerfil($id)
   {

        $disciplinasmodel = new DisciplinasModel;
        $alunodisciplinamodel = new AlunoDisciplinaModel;
        $data['disciplina'] = $disciplinasmodel->getdisciplina($id);
        $data['alunos'] = $alunodisciplinamodel->getalunos2($id);
        return view('disciplinaperfil', $data);
    }
}
