<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class EnvirontmentTest extends TestCase
{
    public function testGetEnv()
    {
        $yt = env('YOUTUBE');
        
        self::assertEquals('itsmhyne', $yt);
    }

    public function testDefaultEnv()
    {
        $def = env('AUTHOR', 'hamdan');

        self::assertEquals('hamdan', $def);
    }
}