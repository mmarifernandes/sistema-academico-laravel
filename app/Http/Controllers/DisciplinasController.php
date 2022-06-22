<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DisciplinasModel;
use App\Models\ProfessoresModel;

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
        return redirect('/');

    }




      public function disciplinasview(){
          $professoresmodel = new ProfessoresModel;
          $disciplinasmodel = new DisciplinasModel;
          $data['all'] = $disciplinasmodel->disciplinas();
          $data['disciplinas'] = $data['all'];
        return view ('disciplinas',$data);
    }
}
