<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    //
    protected $table ='cliente';
    public $timestamps = false;
    
    public $primaryKey = 'idCliente';

    protected $fillable = ['nombreCliente','cedulaCliente','telefonoCliente','direccionCliente','emailCliente'];
}
