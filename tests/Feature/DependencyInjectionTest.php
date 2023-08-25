<?php

namespace Tests\Feature;

use App\Data\Bar;
use App\Data\Foo;
use Tests\TestCase;
use App\Data\Person;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class DependencyInjectionTest extends TestCase
{
    // public function testDependency()
    // {
    //     $foo = new Foo();
    //     $bar = new Bar($foo);
        
    //     self::assertEquals('Foo and Bar');
    
    // }

    // public function testBind()
    // {
    //     // $person = $this->app->make(Person::class);
    //     // self::assertNotNull($person);
        
    //     $this->app->bind(Person::class, function ($app)
    //     {
    //         return new Person("its", "mhyne");
    //     });
        
    //     $person1 = $this->app->make(Person::class);
    //     $person2 = $this->app->make(Person::class);
        
    //     self::assertEquals('its', $person1->firstName);
    //     self::assertEquals('its', $person2->firstName);
    //     self::assertNotSame($person1, $person2);
    // }

    // public function testSingleton()
    // {
    //     // $person = $this->app->make(Person::class);
    //     // self::assertNotNull($person);
        
    //     $this->app->singleton(Person::class, function ($app)
    //     {
    //         return new Person("its", "mhyne");
    //     });
        
    //     $person1 = $this->app->make(Person::class);
    //     $person2 = $this->app->make(Person::class);
        
    //     self::assertEquals('its', $person1->firstName);
    //     self::assertEquals('its', $person2->firstName);
    //     self::assertSame($person1, $person2);
    // }

    // public function testInstance()
    // {
    //     $person = new Person("its", "mhyne");
    //     $this->app->instance(Person::class, $person);
        
    //     $person1 = $this->app->make(Person::class);
    //     $person2 = $this->app->make(Person::class);
        
    //     self::assertEquals('its', $person1->firstName);
    //     self::assertEquals('its', $person2->firstName);
    //     self::assertSame($person1, $person2);
    // }

    public function testDependencyInjection()
    {
        $this->app->singleton(Foo::class, function ($app)
        {
            return new Foo();
        });
        
        $this->app->singleton(Bar::class, function ($app)
        {
            $foo = $app->make(Foo::class);
            return new Bar($foo);
        });


        $foo = $this->app->make(Foo::class);
        $bar1 = $this->app->make(Bar::class);
        $bar2 = $this->app->make(Bar::class);

        self::assertSame($foo, $bar1->foo);
        self::assertSame($bar1, $bar2);
    }
}
