<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    //
     public function get_students(){
    	static $students = array(0 => 'Sevda', 1 => 'Luydmila', 2 => 'Aruzhan', 3 => 'Aidana', 4 => 'Azret');
    	return $students;
    }

    public function show($id){
    	$students=$this->get_students();
    	return view("student_information", ["name" => $students[$id]]);
    }

    public function your_dob($dob){
    	return view("student_dob") -> with("dob", $dob);
    	}

    public function your_age($age){
    	return view("student_age", compact("age"));
    }
}
