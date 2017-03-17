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

		$ver = DB::insert('insert into user values (null,?,?,?,?,?,?,?)',array($matricula,$nome,$sobrenome,$cpf,$telefone,$perfil,1));
		if($ver){
			$mensagem = "Usuário, cadastrado com sucesso";
		} else{
			$mensagem = "Ops, Alguma coisa deu errado. Tente novamente";
		}
		return view('gestor.home')->with('mensagem', $mensagem);
	}

	public function exibe(){
		
		$users = DB::select('select * from user where status = ?',array(1));

		return view('gestor.lista')->with('users', $users);
	}

	public function edita($iduser){
		$result = DB::select('select * from user where iduser = ?',array($iduser));

		return view('gestor.detalhes')->with('user',$result[0]);
	}

	public function update(){
		$nome = Request::input('nome');
		$sobrenome = Request::input('sobrenome');
		$cpf = Request::input('cpf');
		$telefone = Request::input('telefone');
		$perfil = Request::input('perfil');
		$iduser = Request::input('iduser');

		$ver = DB::update('update user set name = ?, sobrenome = ?, cpf = ?, telefone = ?, perfil = ? where iduser = ? ',array($nome,$sobrenome,$cpf,$telefone,$perfil,$iduser));
		if($ver){
			$mensagem = "Dados atualizado com sucesso";
		} else{
			$mensagem = "Ops, Alguma coisa deu errado. Tente novamente";
		}
		return view('gestor.home')->with('mensagem', $mensagem);
	}

	public function remove($iduser){
		$result = DB::update('update user set status = 2 where iduser = ?',array($iduser));

		if ($result) {
			$mensagem = "Usuário, removido com sucesso";
		}else{
			$mensagem = "Ops, Alguma coisa deu errado. Tente novamente";
		}

		return view('gestor.home')->with('mensagem',$mensagem);
	}
}
	
?>