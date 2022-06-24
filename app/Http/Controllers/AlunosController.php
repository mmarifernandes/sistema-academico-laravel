<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AlunosModel;
use App\Models\DisciplinasModel;

class AlunosController extends Controller
{

   public function registrationAluno()
   {
        return view('formregisteraluno');
    }

       public function alunoPerfil($id)
   {


        $alunosmodel = new AlunosModel;
        $data['disciplinas'] = $alunosmodel->getalunodisc($id);
        $data['all'] = $alunosmodel->getaluno($id);
        $data['aluno'] = $data['all'];
  $disciplinasmodel = new DisciplinasModel;
          $data['disciplinas2'] = $disciplinasmodel->get();
        return view('alunoperfil', $data);
    }

        public function insertDataAluno(Request $request)
        {

        $randomNumber = random_int(10000000, 99999999);


        $alunosmodel = new AlunosModel;

        $alunosmodel->nome = $request->nome;
        $alunosmodel->email = $request->email;
        $alunosmodel->matricula = $randomNumber;
        $data[] = $alunosmodel;
        $alunosmodel->insert($data);
        return redirect('/alunosview');

    }



      public function alunosview(){

        $alunosmodel = new AlunosModel;
        $data['all'] = $alunosmodel->get();
        $data['alunos'] = $data['all'];
        return view ('alunos',$data);
    }



}
