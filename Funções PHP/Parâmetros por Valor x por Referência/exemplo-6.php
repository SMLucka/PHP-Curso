<?php

$pessoa = array(
    'nome'=>'Lucca',
    'idade'=>19
);

    foreach ($pessoa as &$value) {

        if (gettype($value) === 'integer') $value += 10;

        echo $value.'<br>';

    }

    Print_r($pessoa)

    ?>


