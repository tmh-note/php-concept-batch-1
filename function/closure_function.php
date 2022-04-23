<?php

$name = 'Aung Aung';
$age = 25;

// $hello = function () use ($name, $age) {
//     return "Hello $name, $age.";
// };

function hello(string $message,callable $callback) {
    return $callback($message);
}

hello('Hello', function($message) use ($name, $age) {
    echo "$message $name, $age.";
});

