<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Clientedos extends Model
{
    use HasFactory;
    protected $table="clientedos";
    protected $fillable=['codigocliente','Nombre','apellido','direccion','telefono'];

    
}
