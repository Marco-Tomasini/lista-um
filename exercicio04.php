<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>fatorial</title>
</head>

<body>
    <form method = "POST" >
        <label for="par_impar">escreva um Nº para verificar o fatorial:</label>
        <input type="number" id="fatorial" name="fatorial">
        <button type="submit" name="verificar_fatorial">Verificar</button>
    </form>
    

    <?php

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        if(isset($_POST['verificar_fatorial'])){
            $numero = $_POST['fatorial'];
            echo "fatorial escolhido: $numero";
            
            $fatorial = true;

            if($numero < 0) {
                $fatorial = false;
                echo "<br><br> O número escolhido não tem fatorial pois e negativo";
            } else if($numero == 0 || $numero ==1){
                $fatorial = true;
                echo "<br><br> O fatorial de $numero é 1.";
            } else {
                $fatorial = 1;
                for($i = 1; $i <= $numero; $i++) {   
                    $fatorial = $fatorial * $i;
                }
                echo "<br><br> O fatorial é $fatorial.";
            }
        }
    }

    ?>

</body>
</html>