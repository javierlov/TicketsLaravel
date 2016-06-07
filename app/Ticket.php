<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    protected $table = 'tickets';	
    protected $fillable = ['id', 'estado_id', 'detalle'];

    /*
    */
    public function categoria(){
            //belongsTo = una nota pertenece a una categoria
            //return $this->belongsTo(Categoria::class);
    }

    public function estado(){
            /*belongsTo = un ticket tiene un estado
                    estan en el mismo namespace App
            */
            return $this->belongsTo(\App\Estado::class);
    }
	
}
