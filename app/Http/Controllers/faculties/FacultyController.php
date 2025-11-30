<?php

namespace App\Http\Controllers\faculties;

use App\Http\Controllers\Controller;
use App\Models\faculties\FacultyModel;
use Illuminate\Http\Request;

class FacultyController extends Controller
{
    function add_faculty(Request $req){
        $faculty = new FacultyModel();

        $faculty->gender = $req->faculty_gender;
        $faculty->first_name = $req->faculty_fname;
        $faculty->last_name = $req->faculty_lname;
        $faculty->email = $req->faculty_email;
        $faculty->number = $req->faculty_number;
        $faculty->emp_id = $req->faculty_empid;
        $faculty->joining_date = $req->faculty_joiningdate;
        $faculty->department = $req->faculty_department;
        $faculty->designation = $req->faculty_designation;
        $faculty->qualification = $req->faculty_qualification;

        $faculty->save();

        return redirect()->back()->with("success", "Faculty added successfully");
    }

    function view_faculties(){
        $faculty = new FacultyModel();
        $data = $faculty::all();

        return view("view_faculties", compact("data"));
    }
}
