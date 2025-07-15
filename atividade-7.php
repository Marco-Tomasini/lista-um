<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nº Perfeito</title>
</head>
<body>

    <form method="POST" action="">
        <label for="n_perfeito">Escreva um Nº para verificar se é perfeito</label>
        <input type="number" id="n_perfeito" name="n_perfeito">
        <button type="submit" name="verificar_n_perfeito">Verificar</button>
    </form>

    <?php

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        if(isset($_POST['verificar_n_perfeito'])){

            $numero = $_POST['n_perfeito'];
            $resultado = null;

            for($i = 1; $i < $numero; $i++){
                if($numero % $i == 0){
                    $resultado += $i;
                }
            }

            if($resultado == $numero){
                echo "O Nº escolhido é perfeito";
            } else{
                echo "O Nº escolhido NÃO é perfeito";
            }
        }
    }


    ?>
    
</body>
</html>