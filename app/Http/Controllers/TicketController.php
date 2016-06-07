<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Ticket;
use App\Http\Controllers\Controller;

class TicketController extends Controller
{
    public function index(){
        $tickets  = Ticket::paginate(10);         
        //$tickets  = Ticket::all();	          
        //return view('ticket/list', compact('tickets'));        
        return view('ticket/list', ['tickets' => $tickets] );        
    }
    
    public function show($ticket){
        $ticket = Ticket::findOrFail($ticket);
        return view('ticket/detalle', ['ticket' => $ticket]);
    }
	
    public function create(){
        //return 'crear ticket';
        $estados = \App\Estado::all()->lists('detalle', 'id');
        //$estados = \App\Estado::all();
        $selected = array();
      
        return view('ticket/create', 
                        ['estados' => $estados, 'selected' => $selected] );        
      //  return view('ticket/create', compact('tickets'));
    }
    
    public function store(){
        // return 'store ticket';      
        
        $this->validate(request(), ['ticket' =>['required', 'max:440'], 'estado' => ['required']]);		
        $datos = request()->get('ticket');				
        $estado = request()->get('estado');				
        Ticket::create(['detalle' => $datos,'estado_id' => $estado]);        
        return redirect()->to('ticket');
    }

}
