<?php

use Illuminate\Database\Seeder;
use App\Ticket;

class TicketTableSeeder extends Seeder
{
    public function run()
    {        
        //factory(\App\Ticket::class)->times(100)->create();
        $tickets = factory(\App\Ticket::class)->times(100)->make();        
        $estados = \App\Estado::all();
        /*A cada nota se le va a crear una categoria en forma random
         el metodo notas() fue definido en la clase Estados */
        foreach($tickets as $ticket){
            /*primero obtengo una categoria en forma aleatoria*/
            $estado =$estados->random();
            /**/
            $estado->ticket()->save($ticket);
        }
    }
}
