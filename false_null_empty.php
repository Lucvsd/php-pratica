<html>

<head>
    <meta charset="UTF-8">
    <title>Curso PHP</title>
</head>

<body>
    <?php

        //false (true/false) - tipo variável boolean
        //null e empty - valores especiais

        $funcionario1 = null;
        $funcionario2 = '';
        $funcionario3 = false;

        //valores null
        if(is_null($funcionario1)) {
            echo 'Sim, a variável é null';
        } else {
            echo 'Não, a variável não é null';
        }

        echo '<br />'
        if(is_null($funcionario2)) {
            echo 'Sim, a variável é null';
        } else {
            echo 'Não, a variável não é null';
        }
        
        echo '<br />'
        if(is_null($funcionario3)) {
            echo 'Sim, a variável é null';
        } else {
            echo 'Não, a variável não é null';
        }

        echo '<br />'

        //valores vazios?
        if(empty($funcionario1)) {
            echo 'Sim, a variável é null';
        } else {
            echo 'Não, a variável não é null';
        }

        echo '<br />'
        if(empty($funcionario2)) {
            echo 'Sim, a variável é vazio';
        } else {
            echo 'Não, a variável não é vazio';
        }

        echo '<br />'
        if(empty($funcionario3)) {
            echo 'Sim, a variável é vazio';
        } else {
            echo 'Não, a variável não é vazio';
        }

    ?>
</body>

</html>