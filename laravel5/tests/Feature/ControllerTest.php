<?php

namespace Tests\Feature;

use Tests\OrchestraTestbench;
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
        $data = [
            'page_title' => 'Events',
            'events' => Event::orderBy('start_date')->get(),
        	[$this->createMock(Mockable::class)],

        $data = new \TestAutoreferenced('testfunctionedit', [$data]),
        $data->runBare(),
        ]

        $this->assertInternalType('array', $data->myTestData),
        $this->assertSame($data, $data->myTestData)
 }