<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Divisores</title>
</head>

<body>
    <form method = "POST" >
        <label for="numero_amigo">escreva um Nº para verificar seus divisores:</label>
        <input type="number" id="numero" name="numero">
        <button type="submit" name="verificar_numero_divisores">Verificar</button>
    </form>
    

    <?php

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        if(isset($_POST['verificar_numero_divisores'])){

            $numero = $_POST['numero'];

            $array_div = [];

            for($i = 1; $i <= $numero; $i++){
                if($numero % $i == 0){
                    $array_div[] = $i;
                }
            }

            echo "Divisores de $numero: <br>";

            foreach($array_div as $divisores) {
                echo $divisores . "<br>";
            }
        }
    }

    ?>

</body>
</html>