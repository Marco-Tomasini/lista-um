<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>verificar ano bissexto</title>
</head>
<body>

    <form method="POST" action="">
        <label for="CF">Escreva um ano para verificar</label>
        <input type="number" id="bissexto" name="bissexto">
        <button name="verificar_bissexto" id="verificar_bissexto">Verificar</button>
    </form>
    
    <?php

        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            if(isset($_POST['verificar_bissexto'])){

                $anoB = $_POST['bissexto'];
                $bissexto = false;

                if($anoB % 4 == 0){

                    if($anoB % 100 == 0 && $anoB % 400 != 0){
                        $bissexto = false;

                    } else{
                        $bissexto = true;
                    }
                } else {
                    $bissexto = false;

                }

                if($bissexto){
                    echo "O ano $anoB é bissexto";
                } else{
                    echo "O ano $anoB NÃO é bissexto";
                }
            }
        }


    ?>


</body>
</html>