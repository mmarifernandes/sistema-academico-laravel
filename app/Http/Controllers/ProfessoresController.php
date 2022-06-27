<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProfessoresModel;
use App\Models\DisciplinasModel;
use App\Models\AlunoDisciplinaModel;

class ProfessoresController extends Controller
{

   public function registrationProf()
   {
        return view('formregisterprof');
    }



        public function insertDataProfessor(Request $request)
        {

        $randomNumber = random_int(10000000, 99999999);


        $professoresmodel = new ProfessoresModel;

        $professoresmodel->nome = $request->nome;
        $professoresmodel->email = $request->email;
        $professoresmodel->codigo = $randomNumber;
        $data[] = $professoresmodel;
        $professoresmodel->insert($data);
        return redirect('/professoresview');

    }




      public function professoresview(){

        $professoresmodel = new ProfessoresModel;
        $data['all'] = $professoresmodel->get();
        $data['professores'] = $data['all'];
        return view ('professores',$data);
    }



          public function professorPerfil($id)
   {


        $professoresmodel = new ProfessoresModel;
        $disciplinasmodel = new DisciplinasModel;
        $alunodisciplinamodel = new AlunoDisciplinaModel;

        $data['disciplinas'] = $disciplinasmodel->getprofdisc($id);
        $data['alunos'] = $alunodisciplinamodel->getalunos($id);

        return view('professorperfil', $data);
    }
}
