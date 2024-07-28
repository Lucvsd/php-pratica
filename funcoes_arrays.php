<html>

<head>
    <meta charset="UTF-8">
    <title>Curso PHP</title>
</head>

<body>
    <?php

        //is_array(array) -> Verifica se o parâmetro é um array
        /*
        $array = array('notebool', 'teclado');
        $retorno = is_array($array);

        if($retorno) {
            echo 'Sim, é um array';
        } else {
            echo 'Não, não é um array';
        }
        */

        //array_keys(array) -> Retorna todas as chaves de um array
        /*
        $array = [1 => 'a', 7 => 'b', 18 => 'c'];
        echo '<pre>';
            print_r($array);
        echo '</pre>';

        echo '<pre>';
            print_r($chaves_array);
        echo '</pre>';
        */

        //sort(array) -> Ordena um array preservando os índices 
        /*
        $array = array('teclado', 'mouse', 'cabo hdmi', 'gabinete', 'fonte' ,'notebool');
        echo '<pre>';
            print_r($array);
        echo '</pre>';

        sort($array); //true ou false
        echo '<pre>';
            print_r($array);
        echo '</pre>';
        */

        //count(array) -> Conta a quantidade de elementos de um array
        /*
        $array = array('teclado', 'mouse', 'cabo hdmi', 'gabinete', 'fonte' ,'notebool');
        echo '<pre>';
            print_r($array);
            echo acount($array);
        echo '</pre>';
        */

        //array _merge(array) -> Funde um ou mais arrays
        /*
        $array1 = ['osx', 'windows'];
        $array2 = array ('linux');
        $array3 = ['solaris'];

        $novo_array = array_merge($array1, $array2, $array3);
        echo '<pre>';
            print_r($novo_array);
        echo '</pre>';
        */

        //explode(array) -> Divide uma string baseado em um delimitador 
        /*
        $string = '28/07/2024';
        $array_retorno = explode('/', $string);
        echo '<pre>';
            echo $string;
            print_r($array_retorno);
            echo $array_retorno[2].'-'.$array_retorno[1].'-'.$array_retorno[0];
        echo '</pre>';
        */

        //implode(array) -> Junta elementos de um array em uma string
        $array = ['a', 'b', 'x', 'y']; //a,b,x,y
        $string_retono = implode('-', $arrtay);
        echo $string_retono;


    ?>
</body>

</html>