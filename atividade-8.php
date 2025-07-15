<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pares</title>
</head>
<body>

    <form method="POST" action="">
        <label for="n_perfeito">Escreva um Nº para os pares entre 1 e esse número</label>
        <input type="number" id="pares" name="pares">
        <button type="submit" name="verificar_pares">Verificar</button>
    </form>

    <?php

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        if(isset($_POST['verificar_pares'])){

            $numero = $_POST['pares'];
            $pares = [];

            for($i = 1; $i <= $numero; $i++){
                if($numero == 0 || $numero == 1){

                    echo "O número $numero não tem pares ou é menor que 1";

                }elseif($i % 2 == 0){
                    $pares[] = $i;
                }
            }

            echo "<br> Pares entre 1 e $numero: <br>";

            foreach($pares as $par) {
                echo $par . "<br>";
            }
        }
    }


    ?>
    
</body>
</html>