<?php

namespace Tests\Feature;


use Tests\BrowserKitTestCase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;


class ControllerTest extends BrowserKitTestCase

{
    /**
     * A basic test example.
     *
     * @return void
     */

    public function testscontroller()
    {
        $this->call('return', 'home');
        $this->see('Laravel');
    }
}
