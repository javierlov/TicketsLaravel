<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;

class UsuarioController extends Controller
{
    public function index(){
        //$tickets  = Ticket::paginate(10);         
        $usuarios = \App\User::all();	          
        //return $usuarios;
        return view('usuarios/list', ['usuarios' => $usuarios] );        
    }
    
    public function show($user){
        $usuarios = \App\User::findOrFail($user);
        //// return $usuarios;
        return view('usuarios/detalle', ['usuarios' => $usuarios]);
    }

    public function create(){
        // return 'crear user';
        $usuarios = \App\User::all();                     
        return view('usuarios/create', $usuarios );              
    }
    
    public function store(){        
        // return request();
        
        $this->validate(request(), 
                ['username' =>['unique:users','required', 'max:20'], 
                'password' =>['required', 'max:10'], 
                'email' =>['unique:users','required', 'max:30'], 
                'sexo' => ['required']]);		
        
        $nombre = request()->get('name');				
        $sexo = request()->get('sexo');				
        $email = request()->get('email');				
        $password = request()->get('password');				
        
        \App\User::create(['name' => trim($nombre), 
            'sexo' => $sexo, 
            'email' => trim($email), 
            'password' => bcrypt($password)]);        
        
        return redirect()->to('usuario');
    }
    
}
