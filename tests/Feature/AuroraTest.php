<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class AuroraTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_pagina_contacto()
    {
        $response = $this->get('/contacto');

        $response->assertStatus(200);
    }

    /** @test */
    public function test_pagina_campos()
    {
        $response = $this->get('/contacto');

        $response->assertStatus(200);

        $response->assertSeeText(['Nombre', 'E-mail', 'Teléfono', 'Mensaje']);
    }

    /** @test */
    public function validacion_formulario()
    {
        $response = $this->post('/recibe-form-contacto', [
            'nombre' => '',
            'email' => 'lomito123',
            'telefono' => '9839202911029',
            'comentarios' => ''
        ]);

        $response->assertSessionHasErrors([
            'nombre',
            'email',
            'telefono',
            'comentarios'
        ]);
    }

    /** @test */
    public function prellenado_formulario()
    {
        $response = $this->get('/contacto/1234');

        $response->assertStatus(200);

        $this->assertEquals('Manuel Fernando Meidna Guerrero', $response['nombre']);
    }

}
