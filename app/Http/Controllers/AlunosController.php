<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\AlunosModel;

class AlunosController extends Controller
{

   public function registrationAluno()
   {
        return view('formregisteraluno');
    }


        public function insertDataUser(Request $request)
        {

        $validator = Validator::make($request->all(),[
            'name' => 'required|min:5|max:255',
            'email' => 'required|email:rfc',
            'passwd' => 'required|min:5|max:100',
        ]);
        if ($validator->fails()){
            return redirect('/registration')
            ->withErrors($validator)
            ->withInput();

        }

        $customermodel = new CustomersModel;
        $customermodel->name = $request->name;
        $customermodel->email = $request->email;
        $customermodel->passwd = md5($request->passwd);
        // store data to table customer
        $customermodel->save();
        return redirect('/')->with('success','Registered Successfull. Please, login.');

    }
}
