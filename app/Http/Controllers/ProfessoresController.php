<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfessoresController extends Controller
{

   public function registrationProf()
   {
        return view('formregisterprof');
    }
}
