<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Número Amigo</title>
</head>

<body>
    <form method = "POST" >
        <label for="numero_amigo">escreva dois Nº para verificar se formam um número amigo:</label>
        <input type="number" id="numero_amigo_1" name="numero_amigo_1">
        <input type="number" id="numero_amigo_2" name="numero_amigo_2">
        <button type="submit" name="verificar_numero_amigo">Verificar</button>
    </form>
    

    <?php

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        if(isset($_POST['verificar_numero_amigo'])){

            $n1 = $_POST['numero_amigo_1'];
            $n2 = $_POST['numero_amigo_2'];

            $soma_n1 = null;
            $soma_n2 = null;


            for($i = 1; $i < $n1; $i++){
                if($n1 % $i == 0){
                    $soma_n1 = $soma_n1 + $i;
                }
            }

            for($j = 1; $j < $n2; $j++){
                if($n2 % $j == 0){
                    $soma_n2 = $soma_n2 + $j;
                }
            }
        }


        if($soma_n1 == $n2 && $soma_n2 == $n1){
            echo "Os número é friend man";
        } else{
            echo "Os número NÃO é friend man";
        }
    }


    ?>

</body>
</html>