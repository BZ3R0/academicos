<?php namespace App\Http\Controllers;

use App\Http\Controllers\Controller; 

class homeController extends Controller{
    
    public function exibe(){
        return view('default.principal');
    }
}

?>