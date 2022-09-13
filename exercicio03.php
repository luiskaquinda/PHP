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
        $provincia = isset($_GET["provicia"]) ? $_GET["provicia"]:0;
        switch($provincia) {
            case 1:
                echo "Você vive na Região CENTRO-NORTE do país";
                break;
            case 2:
                echo "Você vive na Região CENTRAL do país";
                break;
            case 3:
                echo "Você vive na Região NORTE do país";
                break;
            case 4:
                echo "Você vive na Região LESTE do país";
                break;
            case 5:
                echo "Você vive na Região SUL do país";
                break;
            case 6:
                echo "Você vive na Região NORDESTE do país";
                break;
            case 7:
                echo "Você vive na Região LESTE do país";
                break;
            default:
                echo "Erro do Sistema!";
        }
    ?>
    <br>
    <button><a href="javascript:history.go(-1)">Voltar</a></button>
</body>
</html>