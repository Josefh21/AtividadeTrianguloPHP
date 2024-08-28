<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora de Triângulo</title>
    <link rel="stylesheet" type="text/css" href="stylesheet.css" media="screen" />
</head>
<body>

    <form method="POST">
        <label for="base">Insira a base do triângulo em centímetros:</label>
        <input type="number" id="base" name="base" required>
        <br><br>
        <label for="altura">Insira a altura do triângulo em centímetros:</label>
        <input type="number" id="altura" name="altura" required>
        <br><br>
        <button type="submit" name="verificar_primo">Verificar</button>
        <br><br>
    </form>

    <?php

        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $base = $_POST['base'];
            $altura = $_POST['altura'];
            $area = ($base * $altura) / 2;
            $limite = 100;

            echo "A área do triângulo é: ". number_format($area, 2) . "cm². ";

            if ($area > $limite){
                echo "A área é maior doque o permitido.";
            }
            else{
                echo "A área está dentro do permitido.";
            }
        }

    ?>

</body>
</html>