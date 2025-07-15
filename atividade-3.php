<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nº Verificator</title>
</head>

<body>
    <form method = "POST" >
        <label for="positivo_negativo">Verificar Nº:</label>
        <input type="number" id="positivo_negativo" name="positivo_negativo">
        <button type="submit" name="verificar_positivo_negativo">Verificar</button>
    </form>
    

    <?php

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        if(isset($_POST['verificar_positivo_negativo'])){
            $numero = $_POST['positivo_negativo'];
            echo "Número escolhido: $numero";

            $ehpositivo = true;

            if($numero > 0) {
                $ehpositivo = true;
                echo "<br><br> O número $numero é positivo.";
            } else if($numero < 0) {
                $ehpositivo = false;
                echo "<br><br> O número $numero é negativo.";
            } else {
                $ehpositivo = 0;
                echo "<br><br> O número $numero é zero.";
            }
        }
    }

    ?>

</body>
</html>