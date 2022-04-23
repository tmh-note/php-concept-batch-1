<?php
// php version 8

// $message = 'Hello World';

// $message = $message ?? 'No message';

// $message ??= 'No message';

// echo $message;

function greeting($message = null) {
    // $message = $message ?? 'No message';
    $message ??= 'No message';

    echo $message;
}

greeting('Hello World');