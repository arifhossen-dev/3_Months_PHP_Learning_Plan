<?php

trait Logger
{
    protected function log($msg)
    {
        echo "Message: {$msg}";
    }
}

class User
{
    use Logger;
    public function createUser($name)
    {
        $this->log("New user {$name}");
    }
}

class Product
{
    use Logger;
    public function createProduct($name)
    {
        $this->log("New product {$name}");
    }
}

$user = new User();
$product = new Product();

$user->createUser('Ashikur Rahman');
echo PHP_EOL;
$user->createUser('Asif Ahmed');
echo PHP_EOL;
$product->createProduct('Watch');