<?php

class Member {
    public $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function name()
    {
        return $this->name;
    }

    public function lastViewed()
    {

    }
}

class Team
{
    protected $name;
    protected $members = [];

    public function __construct($name, $members = [])
    {
        $this->name = $name;
        $this->members = $members;
    }

    // public constructor // public static method // class method
    public static function start(...$params)
    {
        // ... called argument unpacking
        return new static(...$params);
    }

    public function name()
    {
        return $this->name;
    }

    public function members()
    {
        return $this->members;
    }

    public function add($name)
    {
        $this->members[] = $name;
    }

    public function cancel()
    {

    }

    public function manager()
    {

    }
}

$acme = new Team('Acme',[
    new Member('John Doe'),
    new Member('Jane Doe')
]);

// $acme->add('Frank Doe');
// $acme->add('Jane Doe');

// Call a "static constructor"
// $claro = Team::start('Claromentis', [
//     'John Doe',
//     'Jane Doe'
// ])

var_dump($acme->name)