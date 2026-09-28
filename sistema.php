<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversor de medidas</title>
</head>

<body style="background-color: #f0f0f0;">
    <h2>Resultado do valor convertido ✏️​</h2>

    <?php

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // Recebe os valores do formulário comprimento
        $comprimento1 = $_POST['comprimento1'];
        $comprimento2 = $_POST['comprimento2'];
        $valor = $_POST['valor'];


        // Recebe os valores do formulário tempo
        $tempo1 = $_POST['tempo1'];
        $tempo2 = $_POST['tempo2'];
        $valor = $_POST['valor'];

        // Recebe os valores do formulário comprimento
        $massa1 = $_POST['massa1'];
        $massa2 = $_POST['massa2'];
        $valor = $_POST['valor'];

        // Recebe os valores do formulário comprimento
        $temperatura1 = $_POST['temperatura1'];
        $temperatura2 = $_POST['temperatura2'];
        $valor = $_POST['valor'];

        if ($comprimento1 === "m" && $comprimento2 === "cm") {
            $resultado = $valor * 100;
            echo "O valor convertido será de: $resultado $comprimento2";
        } if ($comprimento1 === "m" && $comprimento2 === "km") {
            $resultado = $valor / 1000;
            echo "O valor convertido será de: $resultado $comprimento2";
        } if ($comprimento1 === "cm" && $comprimento2 === "m") {
            $resultado = $valor / 100;
            echo "O valor convertido será de: $resultado $comprimento2";
        } if ($comprimento1 === "cm" && $comprimento2 === "km") {
            $resultado = $valor * 100000;
            echo "O valor convertido será de: $resultado $comprimento2";
        }if ($comprimento1 === "km" && $comprimento2 === "m") {
            $resultado = $valor * 1000;
            echo "O valor convertido será de: $resultado $comprimento2";
        }if ($comprimento1 === "km" && $comprimento2 === "cm") {
            $resultado = $valor * 100000;
            echo "O valor convertido será de: $resultado $comprimento2";
        }if ($comprimento1 == $comprimento2){
            echo "Não repita a unidade de medida! O valor será o mesmo";
        }
    }
    ?>

    <hr>
    <form action="layout.html">

        <button>Voltar</button>
    </form>



</body>

</html>