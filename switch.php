<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Curso PHP</title>
    </head>
    
    <body>
        <?php 

        $parametro = false

        switch () {
            case 1: 
                echo 'entrou no case 1';
                break;

            case 'abc': 
                echo 'entrou no case abc';
                break;

            case false: 
                echo 'entrou no case false';
                break;

            default:
                echo 'Entrou no default';
                break;

        }

        ?>
    </body>
</html>