<?php 

namespace App\Data;

class Bar 
{

    public Foo $foo;

    public function __construct(Foo $foo) {
        $this->foo = $foo;
    }

    public function bar() : String {
        return $this->foo->foo(). ' and Bar';
    }
}


?>