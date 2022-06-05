<?php

namespace App\Http\Controllers;

use App\Student;
use Illuminate\Http\Request;


class StudentController extends Controller
{
    public function studentlist(){
        
        $student1 = new Student();
        $student1->name = 'Jarie';
        $student1->age = 22;
        $student1->city = 'Dhaka';
        $student1->country = 'Bangladesh';
        $student1-> save();

        $student2 = new Student();
        $student2->name = 'Samira';
        $student2->age = 22;
        $student2->city = 'Dhaka';
        $student2->country = 'Bangladesh';
        $student2-> save();

        $student3 = new Student();
        $student3->name = 'Samira';
        $student3->age = 22;
        $student3->city = 'Dhaka';
        $student3->country = 'Bangladesh';
        $student3-> save();
    }

    public function show()
    {
        $students = Student::all();
        return view('show', compact('students')); 
        // return view('show')->with('studentsArr',student::all());
    }

    public function add()
    {
        return view('add');
    }

    public function addSubmit(Request $req)
    {
        $student = new Student();
        $student -> name = $req -> name;
        $student -> age = $req -> age;
        $student -> city = $req -> city;
        $student -> country = $req -> country;
        $student -> save();
        return redirect('/show');
        
    }


    public function edit($id){
        // $student = Student::find($id);
        return view('student_edit',compact('id'));
    }

    public function update(Request $req, $id)
    {
        // return 123;
        $student = Student::find($id);
        $student -> name = $req -> name;
        $student -> age = $req -> age;
        $student -> city = $req -> city;
        $student -> country = $req -> country;
        $student -> save();
        // dd($student);

        return redirect('/show');
        
    }

    public function delete($id){
        $student = Student::find($id);
        $student->delete();
        return redirect('/show');
    }
}
