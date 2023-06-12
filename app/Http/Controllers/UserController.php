<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function index() {
        return 'Index function of User Controller.';
    }

    public function show($id) {

        $data = array(
            "id" => $id,
            "name" => 'User Name',
            "age" => 21
        );

        return view('sample', $data);
    }

    public function login() {
        return view('user.login');
    }

    public function process(Request $request) {
        $validated = $request->validate([
            "email" => ['required', 'email'],
            "password" => 'required'
        ]);

        if(auth()->attempt($validated)) {
            $request->session()->regenerate();
        }

        return redirect('/')->with('message', 'Welcome Student!');
    }

    public function register() {
        return view('user.register');
    }

    public function logout(Request $request) {
        auth()->logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/login')->with('message', 'Logout successful');
    }

    public function store(Request $request) {
        $validated = $request->validate([
            "first_name" => ['required', 'min:2'],
            "last_name" => ['required', 'min:2'],
            "gender" => 'required',
            "email" => ['required', 'email', Rule::unique('students', 'email')],
            "password" => 'required|confirmed|min:6'
        ]);

        $validated['password'] = bcrypt($validated['password']);
        $students = Student::create($validated); //this variable should be the same with the table name on the database
        auth()->login($students);
    }
}
