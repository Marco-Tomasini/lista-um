<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora IMC</title>
</head>
<body>

    <form method="POST" action="">
        <label for="IMC_peso">Escreva o seu peso (Kg): </label>
        <input id="IMC_peso" step="0.01" name="IMC_peso" type="number">
        <br>
        <label for="IMC_altura">Escreva sua altura (m): </label>
        <input id="IMC_altura" step="0.01" name="IMC_altura" type="number">

        <button type="submit" id="calcula_IMC" name="calcula_IMC">Calcular IMC</button>
    </form>
    

    <?php

        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            if(isset($_POST['calcula_IMC'])){

                $peso = $_POST['IMC_peso'];
                $altura = $_POST['IMC_altura'];
                $IMC = (float) $peso/($altura ^ 2);

                if($IMC < 18.5){
                    $categoria = "Abaixo do peso";
                }
                
                if($IMC < 25 && $IMC >= 18.5){
                    $categoria = "Normal";
                }

                if($IMC >= 25 && $IMC < 30){
                    $categoria = "Sobrepeso ";
                }

                if($IMC >= 30 && $IMC < 35){
                    $categoria = "Obesidade I";
                }

                if($IMC >= 35 && $IMC < 40){
                    $categoria = "Obesidade II";
                }       
                
                if($IMC >= 40){
                    $categoria = "Obesidade III";
                }                      
            }
            echo "O seu IMC é $IMC e está na classificação $categoria";
        }

    ?>

</body>
</html>