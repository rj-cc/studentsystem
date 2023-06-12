<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Student;

class StudentController extends Controller
{
    public function index() {

        $data = Student::all(); //retrieve all the data
        // $data = Student::where('gender','like', 'M')->orderBy('first_name', 'desc')->limit(5)->get();

        // $data = DB::table('students')->select(DB::raw('count(*) as gender_count, gender'))->groupBy('gender')->get();

        return view('students.index', ['students' => $data]);
    }
}
