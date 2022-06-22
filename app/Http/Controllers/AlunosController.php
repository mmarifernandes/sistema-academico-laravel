<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AlunosModel;

class AlunosController extends Controller
{

   public function registrationAluno()
   {
        return view('formregisteraluno');
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
        return redirect('/');

    }




      public function alunosview(){

        $alunosmodel = new AlunosModel;
        $data['all'] = $alunosmodel->get();
        $data['alunos'] = $data['all'];
        return view ('alunos',$data);
    }
}
