<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verificar Data</title>
</head>
<body>

    <form method="POST" action="">
        <label for="data">Escreva uma data: </label>
        <input type="date" id="data" name="data">
        <button name="verificar_data" id="verificar_data" type="submit">Verificar</button>
    </form>

    <?php

        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            if(isset($_POST['verificar_data'])){

                $data = $_POST['data'];

                echo "A data $data é uma data válida";
            }
        }

    ?>
    
</body>
</html>