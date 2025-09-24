<?php

namespace Armanphp\Belajar;

    class Customer
    {
        public function __construct()
        {
            echo "Hello Customer" . PHP_EOL;
        }

        public function sayHello(string $name = "Guest"): string
        {
           return "Hello $name, My Name is Customer" . PHP_EOL;
        }
    }
