<?php

class MyException extends Exception
{

}

function showMessage($message)
{
    if(! is_string($message)) {
        throw new MyException('$message must be string.');
    }

    echo $message;
}

try {
    showMessage([]);
} catch(MyException $e) {
    echo "Error message: " . $e->getMessage();
}

