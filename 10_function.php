<?php

function hello(string $name='Mg Mg',string $township = 'Mandalay',int $age, array $hobbies) : array {
    // return "Hello $name, $age who live in $township and hobbies are $hobbies[0]";
    return ['apple', 'orange'];
}

$result = hello('Mg Mg', 'Yangon', 18, ['eat', 'sleep']);

var_dump($result[0]);