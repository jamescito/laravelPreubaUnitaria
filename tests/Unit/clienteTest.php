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
    public function test_un_cliente_tiene_mucho_posts()
    {
        $cliente= new Clientedos;

        $this->assertInstanceOf(Collection::class, $cliente->posts);
    }
}
