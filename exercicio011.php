<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Palíndromo</title>
</head>
<body>
    
    <form method="POST" action="">
        <label for="palavra">escreva uma palavra para verificar: </label>
        <input type="text" id="palavra" name="palavra">
        <button type="submit" id="palavra_verificar" name="palavra_verificar">Verificar</button>
    </form>


    <?php

        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            if(isset($_POST['palavra_verificar'])){
                $palavra = $_POST['palavra'];
                $palavraI = strrev($palavra);

                if($palavra == $palavraI){
                    echo "A palavra $palavra é um palíndromo";
                } else{
                    echo "A palavra $palavra NÃO é um palíndromo";
                }


            }
        }


    ?>

</body>
</html>