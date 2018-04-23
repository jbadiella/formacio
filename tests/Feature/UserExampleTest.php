<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class UserExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */

    public function testExample()
    {
        $response = $this->get('/users/135/edit')
            ->assertStatus(200)
            ->assertSee("Edició de l'usuari: 135");
    }

    public function testExample_no()
    {
        $response = $this->get('/usuarios/texto/edit')
            ->assertStatus(200);
    }

    public function testName()
    {
        $response = $this->get('/hola/Jaume')
            ->assertStatus(200)
            ->assertSee("Hola, Jaume");
    }

    public function testNick()
    {
        $response = $this->get('/hola/Jaume/jbadiella')
            ->assertStatus(200)
            ->assertSee("Hola, Jaume (altrament dit jbadiella)");
    }

  

}
