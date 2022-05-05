<?php

namespace App\Http\Controllers;

use App\Models\Curso;
use Illuminate\Http\Request;

class CursoController extends Controller
{
    public function index() {
    
        return view('welcome');
}

    public function createCursos() {

        return view('courses.create');
    }

    public function cursos() {

        $cursos = Curso::all();

        return view('courses.cursos', compact('cursos'));
        
    }

    public function login() {

        return view('login.login');
}
}