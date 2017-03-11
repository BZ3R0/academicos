<?php namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

use App\Http\Controllers\Controller;
use Request;

class alunoController extends Controller{

	public function home(){
		return view('aluno.home');
	}
}

?>
