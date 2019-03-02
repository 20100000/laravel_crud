<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Aluno;
use App\Professor;

class AlunoController extends Controller
{
    public function index(){
        $alunos = Aluno::find(1)->orderBy('created_at', 'desc')->paginate(10);

        return view('aluno',['data' => $alunos ]);
    }

    public function addAluno() {
        $professores = Professor::orderBy('created_at', 'desc')->paginate(10);
        return view('formaluno', ['professores' => $professores]);
    }

    public function salveAluno(Request $request){
        $alu = new Aluno();
        $alu->nome  = $request->nome;
        $alu->email = $request->email;
        $alu->ra    = $request->ra;
        $alu->professor_id = $request->professor;
        $alu->save();

        return $this->index();
    }
}
