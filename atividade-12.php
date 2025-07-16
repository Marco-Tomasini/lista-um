<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contador Vogais</title>
</head>
<body>
    
    <form method="POST" action="">
        <label for="palavra">escreva uma palavra para verificar quantas vogais estão presentes: </label>
        <input type="text" id="palavra" name="palavra">
        <button id="verificar_vogal" name="verificar_vogal">Verificar</button>
    </form>


    <?php

        if($_SERVER ['REQUEST_METHOD'] == 'POST'){
            if(isset($_POST['verificar_vogal'])){

                $palavra = $_POST['palavra'];
                $vogais = "aeiouAEIOU";
                $contador = null;

                for($i = )
            }
        }

    ?>