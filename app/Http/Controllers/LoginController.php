<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\login;  

class LoginController extends Controller
{
    //

    function login(){
    	//dd('ll');
    	return view('login');
    }
    

    function add_login(Request $req){
    	//dd('ll');
    	
    	$name = $req->input('name');
    	$mobile = $req->input('mobile');
    	
    	$check = login::where('name','=',$name)->where('mobile','=',$mobile)->get();      
    	//dd($check);

    	if(count($check) == 1){       //first condition
    		return 'login successful';
    	}else{
    		return 'not matched credentials';
    	}
    }
}
