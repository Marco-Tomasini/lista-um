<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verificar se Pode votar</title>
</head>
<body>

    <form method="POST">
        <label for="nome">Insira seu Nome</label>
        <input id="nome" name="nome" type="text">
        <br>
        <label for="idade">Insira sua Idade</label>
        <input type="text" id="idade" name="idade">

        <button type="submit" name="verificar_voto" id="verificar_voto">Verificar</button>
    </form>

    <?php

        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            if(isset($_POST['verificar_voto'])){

                $nome = $_POST['nome'];
                $idade = $_POST['idade'];

                if($idade < 16){
                    echo "Olá $nome, com seus $idade anos, você ainda não pode votar";
                }else{
                    echo "Olá $nome, com seus $idade anos, você pode votar";
                }               
            }
        }


    ?>
    
</body>
</html>