<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class ExampleTest extends TestCase
{
    /**
     * A basic functional test example.
     *
     * @return void
     */
    public function testBasicExample()
    {
        $Odhuu = factory('App\User')->create(['name'=>'Odhuu']);

        $this->actingAs($Odhuu)
             ->visit('admin')
             ->see('Hello Odhuu');
    }
}
