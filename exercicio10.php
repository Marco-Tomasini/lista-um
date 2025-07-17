<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sequência de Fibonacci</title>
</head>
<body>

    <form method="POST" action="">
        <label for="Fibonacci">Escreva um Nº para exibir a sequência de Fibonacci até esse número</label>
        <input type="number" id="n1" name="n1">
        <button type="submit" name="verificar_Fibonacci">Verificar</button>
    </form>

<?php

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        if(isset($_POST['verificar_Fibonacci'])){
            $n1 = $_POST['n1'];
            $fiboncci = [0,1];

            for($i = $fiboncci[1]; $i <= $n1; $i++){

                $fiboncci[$i + 1] = $fiboncci[$i - 1] + $fiboncci[$i];
            }

            foreach($fiboncci as $fibonccii) {
                echo $fibonccii . "<br>";
            }

        }
    }



?>