<?php 
// php vesion 8

function greeting($name,$age, $address) {
    echo "Hello $name, $age who live in $address";
}
// echo greeting('Mg Mg', 20, 'Yangon');
// echo greeting(name: 'Mg Mg',age: 20, address: 'Yangon');
echo greeting(age: 20, address: 'Yangon', name: 'Mg Mg');

