<?php

namespace Tests\Feature;

use Tests\TestCase;

class UsuarioControllerTest extends TestCase
{
    /** @test */
    public function perfil_muestra_nombre_y_edad()
    {
        $this->get('/perfil/Marlon/22')
             ->assertStatus(200)
             ->assertSee('Marlon')
             ->assertSee('22');
    }
}