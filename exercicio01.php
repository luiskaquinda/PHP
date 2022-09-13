<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $num = isset($_GET["num"]) ? $_GET["num"] : 0;
        $oper = isset($_GET["oper"]) ? $_GET["oper"] : 1;

        switch ($oper) {
            case 1:
                $result = pow($num, 2);
                echo "O dobro de $num é $result.";
                break;
            case 2:
                $result = pow($num, 3);
                echo "O cubo de $num é $result.";
                break;
            case 3:
                $result = sqrt($num);
                echo "A raiz quadrada de $num é $result.";
                break;
            default:
                $result = 0;
                echo "Erro do Sistema...";
        }
        echo "<br>END!";
    ?>
    <br>
    <button><a href="exercicio01.html">Voltar</a></button>
</body>
</html>