<?php

    require 'values.php';

    $string = "A vizinha gosta de chá com biscoito";

    $string = mb_strtolower($string);

    foreach($setValues as $key => $value){
        $string = str_replace($key, $value, $string);
    }

    echo $string;