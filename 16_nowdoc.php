<?php

// $message = 'My name is "Mg Mg". Age is \'20\'';

$name = "Aung Aung";

$message = <<<'TMH'
My name is <b>$name</b>.
My father is <i>'U Ba'</i>.
TMH;

echo $message;