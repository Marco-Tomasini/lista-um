<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Senha Forte</title>
</head>
<body>

    <form method="POST" action="">
        <label for="numeros">Informe sua senha: </label>
        <input type="password" id="senha" name="senha">
        <button type="submit" id="verificar_senha" name="verificar_senha">Verificar</button>
    </form>
    
    <?php

        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            if(isset($_POST['verificar_senha'])){

            $regex_senha = "/^(?=.*?[a-z])(?=.*?[0-9]).{8,}$/"; 
            $senha = $_POST['senha'];

                if(preg_match($regex_senha, $senha)){
                    echo "senha válida";
                } else
                    echo "senha inválida";

        }
    }

    ?>
