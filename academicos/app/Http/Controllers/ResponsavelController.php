<?php namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

use App\Http\Controllers\Controller;
use Request;

class responsavelController extends Controller{
    
    public function home(){
		return view('responsavel.home');
	}

	//public function responsavelFeedbacks($idresponsavel){
	public function responsavelFeedbacks(){
		$alunos = DB::select('SELECT A.iduser, A.matricula, A.name, A.sobrenome
								FROM user U, user A, user_has_students UHS, students S
								WHERE 	U.iduser = UHS.user_iduser and
									A.iduser = S.user_iduser and
									S.idstudents = UHS.students_idstudents and
									U.iduser = 1002;');
		/*if($alunos.count() > 1){
			return view('responsavel.gradeFeekback')->with('alunos', $alunos);
		}else{
			responsavelFeedback($idstudent->iduser);
		}*/
		return view('responsavel.grade_feedback')->with('alunos', $alunos);
	}
	public function feedback($idstudent){
		$feedbacks = DB::select('SELECT F.mensagem as mensagem,
										(select D.name
    									from discipline as D
									    where F.discipline_iddiscipline = D.iddiscipline) as disciplina,
									    (select D.teacher
									    from discipline as D
									    where F.discipline_iddiscipline = D.iddiscipline) as professor
								FROM feedback as F
								WHERE F.students_user_iduser = ?', array($idstudent));

		return view('responsavel.feedback')->with('feedbacks', $feedbacks);
	}
}

?>

select