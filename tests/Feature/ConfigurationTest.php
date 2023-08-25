<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ConfigurationTest extends TestCase
{
    $firstName = config('contoh.author.first');
    $lastName = config('contoh.author.last');
    $email = config('contoh.email');
    $web = config('contoh.web');

    self:assertEquals('ken', $firstName);
    self:assertEquals('pachi', $lastName);
    self:assertEquals('kenpachi@gmail.com', $email);
    self:assertEquals('https://www.kenpachi.com', $web);
}
