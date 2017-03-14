<?php namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

use App\Http\Controllers\Controller;
use Request;

class gestorController extends Controller{

	public function home(){
		return view('gestor.home');
	}

	public function cadastra(){

		return view('gestor.formulario');
	}

	public function novo(){
		$nome = Request::input('nome');
		$sobrenome = Request::input('sobrenome');
		$cpf = Request::input('cpf');
		$telefone = Request::input('telefone');
		$matricula = rand(20000,22000);
		$perfil = Request::input('perfil');

		$ver = DB::insert('insert into user values (null,?,?,?,?,?,?)',array($matricula,$nome,$sobrenome,$cpf,$telefone,$perfil));
		if($ver){
			$mensagem = "Usuário, cadastrado com sucesso";
		} else{
			$mensagem = "Ops, Alguma coisa deu errado. Tente novamente";
		}
		return view('gestor.home')->with('mensagem', $mensagem);
	}

	public function exibe(){
		$users = DB::select('select * from user');

		return view('gestor.lista')->with('users', $users);
	}
}
	
?>