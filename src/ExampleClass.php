<?php

namespace Study\Reflection;

class ExampleClass
{
    public string $publicProperty = 'public';
    protected string $protectedProperty = 'protected';
    private string $privateProperty = 'private';

    public function __construct()
    {
        echo 'Executing constructor of class ' . __CLASS__;
    }

    public function publicMethod(): void
    {
        echo 'Executing public method';
    }

    protected function protectedMethod(): int
    {
        echo 'Executing protected method';
        return 1;
    }

    private function privateMethod(int $a): void
    {
        echo 'Executing private method';
    }
}
