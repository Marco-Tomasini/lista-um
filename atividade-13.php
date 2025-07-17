<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Converter °C em °F</title>
</head>
<body>

    <form method="POST" action="">
        <label for="CF">Escreva a temperatura em °C para converter</label>
        <input type="number" id="CF" name="CF">
        <button type="submit" name="converter_CF" id="converter_CF">Converter</button>
    </form>
    
    <?php

        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            if(isset($_POST['converter_CF'])){

                $C = $_POST['CF'];
                $F = 1.8 * $C + 32;

                echo "A tem teratura °$C, em celsius, é °$F em fahrenheit.";
            }
        }


    ?>


</body>
</html>