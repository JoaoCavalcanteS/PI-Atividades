<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>Ola</title>
</head>
<body>
    O resultado da operação
    <?php
    echo $_POST["Operacao"];
    ?>
    <?php
        switch($_POST["Operacao"]){
            case "somar":
                echo $_POST["Primeiro"]+$_POST["Segundo"];
                break;
            case "subtrair":
                echo $_POST["Primeiro"]-$_POST["Segundo"];
                break;
            case "multiplicar":
                echo $_POST["Primeiro"]*$_POST["Segundo"];
                break;
            case "dividir":
                echo $_POST["Primeiro"]/$_POST["Segundo"];
                break;
        }
    ?>
</body>
</html>