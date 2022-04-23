<?php

class NotIntegerException extends Exception
{

}

class EmptyValueException extends Exception
{

}

function checkingInteger($value = '') {
    if(! $value) {
        throw new EmptyValueException('$value is empty.');
    }

    if(! is_int($value)) {
        // Creating error
        // throw new Exception('$value must be integer.');
        throw new NotIntegerException('$value must be integer.');
    }
    echo '$value is integer';
}

function checkingArray($value) {
    if(! is_array($value)) {
        // Creating error
        throw new Exception('$value must be array.');
    }
    echo '$value is array';
}

try {
    checkingInteger(['a', 'b']);
} catch(EmptyValueException $e) {
    echo $e->getMessage();
} catch(NotIntegerException $e) {
    echo $e->getMessage();
} catch(Exception $e) {
    echo $e->getMessage();
}


// class Exception
// {
//     public $message;

//     public function __construct($message)
//     {
//         $this->message = $message;
//     }

//     public function getMessage()
//     {
//         return $this->message;
//     }
// }