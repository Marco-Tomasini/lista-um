<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Soma entre 2 Números</title>
</head>
<body>

    <form method="POST" action="">
        <label for="soma">Escreva dois Nºs para verificar a soma entre eles</label>
        <input type="number" id="n1" name="n1">
        <input type="number" id="n2" name="n2">
        <button type="submit" name="verificar_soma">Verificar</button>
    </form>

<?php

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        if(isset($_POST['verificar_soma'])){
            $n1 = $_POST['n1'];
            $n2 = $_POST['n2'];
            $soma = null;

            if($n1 == $n2 || $n1 > $n2){
                echo "Os Nºs devem ser dieferentes, com o primeiro sendo maior que o segundo.";
            } else {
                for($i = $n1 + 1; $i < $n2; $i++){
                    $soma += $i;
                }
            }
            echo "A soma entre os valores entre os números é : $soma";
        }
    }

?>
    
</body>
</html>