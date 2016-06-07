<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Requests\LoginRequest;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades;
use Auth;
use Session;
use Redirect;



class LoginController extends Controller
{
    public function index(){                
        return view('index');    
    }
    public function stored(LoginRequest $request){
        if(Auth::attemp(['email'=>$request['emal'], 'password'=>$request['password'] ]) ){
            return Redirect::to('admin');
        }
        Session::flash('message-error','Datos incorrectos');
        return Redirect::to('/');
        
        //return $request->email;
    }
    public function store(){
         //return request();
        $this->validate(request(), 
                ['username' =>['required', 'max:20'], 
                'password' =>['required', 'max:10'], 
                'email' =>['required', 'max:30'], 
                'sexo' => ['required']]);
        return request();
    }
    public function show(){}
    public function edit(){}
}
