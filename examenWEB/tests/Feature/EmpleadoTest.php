<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class EmpleadoTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testExample()
    {
        $this->post('/empleados', ['nombre' => 'Sally', 'apellido_paterno' => 'Carrillo', 'fecha_nacimiento' => '10-09-1987','ingresos_anuales' => '30000'])
             ->seeJson([
                 'created' => true,
             ]);
    }
}
