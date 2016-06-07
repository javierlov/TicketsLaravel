<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class TicketsCreateTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testExample()
    {
        $this->visit('ticket')
            ->see('Listado de Tickets')
            ->seeLink('Ver Ticket')            
            ->visit('ticket/1')
            ->see('Quod et autem sed')
            ->seeLink('Ver todos los tickets')
            ->click('Ver todos los tickets')
            ->see('Listado de Tickets')
            ->seeLink('Agregar un ticket', 'ticket/crear');
    }
}
