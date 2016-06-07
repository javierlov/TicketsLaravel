<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Estado extends Model
{
    protected $table = 'estados';	
    protected $fillable = ['detalle'];
    
    public function ticket(){        
        return $this->hasMany(Ticket::class);
    }
}
