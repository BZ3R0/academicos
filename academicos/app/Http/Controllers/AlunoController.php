<?php namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Request;

class alunoController extends Controller{

	public function alunoInformation(){
		$users = DB::select('select * from user where iduser = 1');
		return view('aluno.home')->with('users',$users);
	}

	public function alunoDisciplina(){
		$disciplinas = DB::select('select d.iddiscipline, d.name, d.teacher
															 from discipline d
															 left join class_has_discipline cd on d.iddiscipline = cd.discipline_iddiscipline
															 left join class c on cd.class_idclass = c.idclass
															 left join students s on c.idclass = s.class_idclass
															 left join user u on s.user_iduser = u.iduser
															 where u.iduser = 1;');

		return view('aluno.discipline')->with('disciplinas', $disciplinas);
	}

	public function alunoNota($iddiscipline){
		$notas = DB::select('select n.nota, n.unidade
												from notas n
												left join class_has_discipline cd on cd.discipline_iddiscipline = n.discipline_iddiscipline
												left join discipline d on cd.discipline_iddiscipline = d.iddiscipline
												where d.iddiscipline = ?', array($iddiscipline));

		return view('aluno.grade')->with('notas', $notas);
	}

	public function alunoTodasNotas(){
		$allGrades = DB::select('select n.nota
												 from notas n
												 left join user u on n.user_iduser = u.iduser
												 where u.iduser = 1');

		return view('default.principal')->with('allGrades', $allGrades);
	}

	public function alunoFrequencia(){
		$frequencias = DB::select('select *
															 from frequencia f
															 left join user u on f.user_iduser = u.iduser
															 left join discipline d on f.discipline_iddiscipline = d.iddiscipline
															 where d.iddiscipline=1;');
		return view('aluno.frequencia')->with('frequencias',$frequencias);
	}
}
