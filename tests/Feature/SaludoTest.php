<?php

namespace Tests\Feature;

use Tests\TestCase;

class SaludoTest extends TestCase
{
    /** @test */
    public function saludo_devuelve_el_nombre()
    {
        $this->get('/saludo/Marlon')
             ->assertStatus(200)      // Verifica que la ruta responde OK
             ->assertSee('Marlon');   // Verifica que la vista contiene el texto "Marlon"
    }
}
