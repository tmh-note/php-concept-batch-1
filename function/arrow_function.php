<?php

// php version 7.4 

// $hello = function () {
//     return 'hello World';
// };

$hello = fn($name) => "Hello $name";

echo $hello('Mg Mg');
