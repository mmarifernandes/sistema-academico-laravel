<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProfessoresModel;

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
        return redirect('/');

    }




      public function professoresview(){

        $professoresmodel = new ProfessoresModel;
        $data['all'] = $professoresmodel->get();
        $data['professores'] = $data['all'];
        return view ('professores',$data);
    }
}
