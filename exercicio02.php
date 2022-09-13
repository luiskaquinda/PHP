<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>
    <?php
        $diaSemana = isset($_GET["ds"]) ? $_GET["ds"]:0;
        switch($diaSemana) {
            case 2:
            case 3:
            case 4:
            case 5:
            case 6:
                echo "Levanta e vai pra Aula! :)";
                break;
            case 1:
            case 7:
                echo "Descansa moleque! ;)";
                break;
            default:
                echo "Esse dia não existe!";
        }
    ?>
    <br>
    <button><a href="javascript:history.go(-1)">Voltar</a></button>
</body>
</html>