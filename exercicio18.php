<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Qual o maior número?</title>
</head>
<body>

    <form method="POST" action="">
        <label for="numeros">Informe 3 numeros: </label>
        <input type="number" id="n1" name="n1">
        <input type="number" id="n2" name="n2">
        <input type="number" id="n3" name="n3">

        <button type="submit" id="verificar_maior" name="verificar_maior">Verificar</button>
    </form>
    
    <?php

        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            if(isset($_POST['verificar_maior'])){

                $n1 = $_POST['n1'];
                $n2 = $_POST['n2'];
                $n3 = $_POST['n3'];


                if ($n1 > $n2 && $n1 > $n3){
                    echo "O número $n1, primeiro, é o maior";
                }elseif($n2 > $n3 && $n2 > $n1){
                    echo "O número $n2, segundo, é o maior";
                }else{
                    echo "O número $n3, terceiro, é o maior";
                }


            };
        }

    ?>
</body>
</html>