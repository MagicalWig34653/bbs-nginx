<?php


class Person
{
    private string $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function begrüße(): void
    {
        echo 'Hallo ' . $this->name . '!';
    }
}


$max = new Person('Max');
$max->begrüße();
echo '<br>';
$maria = new Person('Heinrich');
$maria->begrüße();