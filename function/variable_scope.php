<?php
// Never dont do

$name = "Mg Mg";  // Global scope

function greeting() {
    // global $name;
    $name = "Aung Aung";
    echo "Hello $name";
}

echo $name;
echo "<br>";
greeting();
echo "<br>";
echo $name;