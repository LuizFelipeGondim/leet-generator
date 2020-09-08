<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Leet Generator</title>
    </head>
    <body>
        
    <h1>Leet Generator</h1>
    <form method="post">
        <label for="string">Informe uma frase:</label>
        <input type="text" name="string" id="string">
        <button type="submit" name="acao">Transformar</button>
    </form>

    <?php

        require 'values.php';

        if(isset($_POST['acao'])){
            $string = mb_strtolower($_POST['string']);

            foreach($setValues as $key => $value){
                $string = str_replace($key, $value, $string);
            }

            echo $string;
        }
    ?>





    </body>
</html>

