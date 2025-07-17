<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tabuada</title>
</head>

<body>
    <form method = "POST" >
        <label for="par_impar">escreva um Nº para verificar a tabuada:</label>
        <input type="number" id="tabuada" name="tabuada">
        <button type="submit" name="verificar_tabuada">Verificar</button>
    </form>
    

    <?php

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        if(isset($_POST['verificar_tabuada'])){
            $numero = $_POST['tabuada'];
            echo "Tabuada escolhida: $numero";

            $tabuada = true;

            for ($i = 1; $i <= 10; $i++){
                $resultado = $numero * $i;
                echo "<br>$numero x $i = $resultado";
            }
        }
    }

    ?>

</body>
</html>