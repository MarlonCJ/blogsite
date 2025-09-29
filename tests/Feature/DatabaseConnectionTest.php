<?php

namespace Tests\Feature;

use Illuminate\Support\Facades\DB;
use Tests\TestCase;

class DatabaseConnectionTest extends TestCase
{
    /** @test */
    public function la_base_de_datos_responde()
    {
        $this->assertTrue(DB::connection()->getPdo() !== null);
    }
}
