<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nº Par-Ímpar</title>
</head>

<body>
    <form method = "POST" >
        <label for="par_impar">Verifica se é par ou ímpar:</label>
        <input type="number" id="par_impar" name="par_impar">
        <button type="submit" name="verificar_par_impar">Verificar</button>
    </form>
    

    <?php

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        if(isset($_POST['verificar_par_impar'])){
            $numero = $_POST['par_impar'];
            echo "Número escolhido: $numero";

            $ehpar = true;

            if($numero % 2 != 0) {
                $ehpar = false;

            } else{
                $ehpar = true;
    
            }
            echo "<br><br> O número $numero é " . ($ehpar ? "par" : "ímpar") . ".";
        }
    }

    ?>

</body>
</html>