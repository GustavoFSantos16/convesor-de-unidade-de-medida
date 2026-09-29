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
        $valorComp = $_POST['valor'];

        // Parte de calculo do comprimento

        if ($comprimento1 === "m" && $comprimento2 === "cm") {
            $resultado = $valorComp * 100;
            echo "O valor convertido será de: $resultado $comprimento2";
        }
        if ($comprimento1 === "m" && $comprimento2 === "km") {
            $resultado = $valorComp / 1000;
            echo "O valor convertido será de: $resultado $comprimento2";
        }
        if ($comprimento1 === "cm" && $comprimento2 === "m") {
            $resultado = $valorComp / 100;
            echo "O valor convertido será de: $resultado $comprimento2";
        }
        if ($comprimento1 === "cm" && $comprimento2 === "km") {
            $resultado = $valorComp * 100000;
            echo "O valor convertido será de: $resultado $comprimento2";
        }
        if ($comprimento1 === "km" && $comprimento2 === "m") {
            $resultado = $valorComp * 1000;
            echo "O valor convertido será de: $resultado $comprimento2";
        }
        if ($comprimento1 === "km" && $comprimento2 === "cm") {
            $resultado = $valorComp * 100000;
            echo "O valor convertido será de: $resultado $comprimento2";
        }
        elseif ($comprimento1 === $comprimento2) {
            echo "Não repita a unidade de medida! O valor será o mesmo";
        }
    }
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {

        // Recebe os valores do formulário tempo
        $tempo1 = $_POST['tempo1'];
        $tempo2 = $_POST['tempo2'];
        $valorTempo = $_POST['valor'];


        // Parte do calculo do tempo
        if ($tempo1 == "s" && $tempo2 == "min") {
            $resultado = $valorTempo / 60;
            echo "O valor convertido será de: $resultado $comprimento2";
        }
        if ($tempo1 == "s" && $tempo2 == "hr") {
            $resultado = $valorTempo / 3600;
            echo "O valor convertido será de: $resultado $comprimento2";
        }
        if ($tempo1 == "min" && $tempo2 == "s") {
            $resultado = $valorTempo * 60;
            echo "O valor convertido será de: $resultado $comprimento2";
        }
        if ($tempo1 == "min" && $tempo2 == "hr") {
            $resultado = $valorTempo / 60;
            echo "O valor convertido será de: $resultado $comprimento2";
        }
        if ($tempo1 == "hr" && $tempo2 == "min") {
            $resultado = $valorTempo * 60;
            echo "O valor convertido será de: $resultado $comprimento2";
        }
        if ($tempo1 == "hr" && $tempo2 == "s") {
            $resultado = $valorTempo * 3600;
            echo "O valor convertido será de: $resultado $comprimento2";
        }
        elseif ($tempo1 ===  $tempo2) {
            echo "Não repita a unidade de medida! O valor será o mesmo";
        }
    }


    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // Recebe os valores do formulário comprimento
        $massa1 = $_POST['massa1'];
        $massa2 = $_POST['massa2'];
        $valorMass = $_POST['valor'];
    }

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // Recebe os valores do formulário comprimento
        $temperatura1 = $_POST['temperatura1'];
        $temperatura2 = $_POST['temperatura2'];
        $valorTemp = $_POST['valor'];
    }


    ?>

    <hr>
    <form action="layout.html">

        <button>Voltar</button>
    </form>



</body>

</html>