<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Professor;

class ProfessorController extends Controller
{
    public function index(){
        $professores = Professor::orderBy('created_at', 'desc')->paginate(10);
        return view('Professor', ['data' => $professores]);
    }
    public function addProfessor() {
        return view('formprofessor');
    }

    public function salveProfessor(Request $request){
        $prof = new Professor();
        $prof->nome = $request->nome;
        $prof->email = $request->email;
        $prof->save();

        return $this->index();
    }
}
