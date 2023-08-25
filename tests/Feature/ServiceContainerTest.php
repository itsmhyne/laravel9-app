<?php

namespace Tests\Feature;

use App\Data\Bar;
use App\Data\Foo;
use Tests\TestCase;
use App\Data\Person;
use App\Services\HelloService;
use App\Services\HelloServiceIndonesia;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ServiceContainerTest extends TestCase
{
    // public function testDependency()
    // {
    //     $foo1 = $this->app->make(Foo::class); //new Foo()
    //     $foo2 = $this->app->make(Foo::class); //new Foo()

    //     self::assertEquals("Foo", $foo1->foo());
    //     self::assertEquals("Foo", $foo2->foo());
    //     self::assertNotSame($foo1, $foo2);
    // }

    public function testInterfaceToClass()
    {
        // $this->app->singleton(HelloService::class, HelloServiceIndonesia::class);

        $this->app->singleton(HelloService::class, function ($app)
        {
            return HelloServiceIndonesia();
        });

        $helloService = $this->app->make(HelloService::class);
        
        self::assertEquals('Halo itsmhyne', $helloService->hello('itsmhyne'));
    }
    
}
