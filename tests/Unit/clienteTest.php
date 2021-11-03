<?php

namespace Tests\Unit;

//use PHPUnit\Framework\TestCase;
use Tests\TestCase;
use App\Models\Clientedos;
use Illuminate\Database\Eloquent\Collection;
class clienteTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    

    public function test_database()
    {
        $this->assertDatabaseMissing('clientedos',[
            'codigocliente'=>'02',   
            'Nombre'=>'jesler',   
            'direccion'=>'fonseca',   
            'telefono'=>'87654',   
        ]);
    }
}
