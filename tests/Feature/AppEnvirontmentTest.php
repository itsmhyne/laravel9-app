<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades;
use Tests\TestCase;

class AppEnvirontmentTest extends TestCase
{
    public function testAppEnv()
    {
        var_dump(App::environtment());
    }
}
