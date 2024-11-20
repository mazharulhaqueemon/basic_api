<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function getapi(){
        $data = Student::all();
        return $data;
    }
}
