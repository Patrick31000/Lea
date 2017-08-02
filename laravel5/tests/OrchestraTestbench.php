<?php

namespace Tests;

use Illuminate\Foundation\Testing\TestCase as Orchestra;

abstract class TestCase extends Orchestra\Testbench\TestCase 
{
    use CreatesApplication;
}