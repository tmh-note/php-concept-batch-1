<?php 

// false -> false, 0, '', [], null
// true

// 80 >= distison
// 40 >= pass
// failed

$day = 1;
if($day == 1) {
    echo "Monday";
} else if($day = 2) {
    echo "Tuesday";
} else if($day = 3) {
    echo "Wednesday";
}

// $day = 1;
switch($day) {
    case 1: echo "Monday";break;
    case 2: echo "Tuesday"; break;
    case 3: echo "Wednesday";
}

$day = 1;
$return_value = match ($day) {
    1 => "Monday",
    2 => "Tuesday",
    3 => "Wednesday",
};

var_dump($return_value);



