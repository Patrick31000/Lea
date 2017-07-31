<?php

namespace Tests\Feature;

use Tests\BrowserKitTestCase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class RouteTest extends BrowserKitTestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testExample(){
        // $response = $this->get('/');

        // $response->assertStatus(200);

        $this->visit('/')
            ->see('Laravel');

        $this->visit('/create')
        	->see('Laravel');

        $this->post('/create')
        	->see('Laravel');

        // $this->visit('/home')
        // 	->see('Laravel');

    }
}
