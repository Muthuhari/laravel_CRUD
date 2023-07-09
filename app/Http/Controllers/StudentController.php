<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Students;

class StudentController extends Controller
{
    protected$student;
    public function __construct(){
      $this->student = new Students();
    }
    public function saveStuate(Request $request){
      $this->student->create($request-all());
    }
}
