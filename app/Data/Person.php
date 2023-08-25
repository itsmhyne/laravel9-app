<?php 

namespace App\Data;

final class Person
{
    public function __construct(
        public string $firstName,
        public string $lastName
    ) {
    }
}


?>