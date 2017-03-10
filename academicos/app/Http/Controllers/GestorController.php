<?php namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

use App\Http\Controllers\Controller;
use Request;

class gestorController extends Controller{

	public function home(){
		return view('default.principal');
	}
}
	
?>