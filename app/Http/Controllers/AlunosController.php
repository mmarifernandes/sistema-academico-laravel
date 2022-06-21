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

        // $validator = Validator::make($request->all(),[
        //     'name' => 'required|min:5|max:255',
        //     'email' => 'required|email:rfc',
        //     'passwd' => 'required|min:5|max:100',
        // ]);
        // if ($validator->fails()){
        //     return redirect('/registration')
        //     ->withErrors($validator)
        //     ->withInput();

        // }

        $alunosmodel = new AlunosModel;
        $alunosmodel->nome = $request->nome;
        $alunosmodel->email = $request->email;
        $alunosmodel->matricula = '234';
        // store data to table alunos
        $alunosmodel->save();
        return redirect('/');

    }




      public function alunosview(){

        $alunosmodel = new AlunosModel;
        $data['all'] = $alunosmodel->get();
        $data['alunos'] = $data['all'];
        return view ('alunos',$data);
    }
}
