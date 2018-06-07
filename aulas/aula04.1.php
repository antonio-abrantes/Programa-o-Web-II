<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Aula 04</title>
    <link rel="stylesheet" href="css/estilos.css">
</head>
<body>

    <h1>Aula 4.1 - Linguagem PHP</h1>
    <hr>
    <h3>Calcular Média</h3>

    <?php 

        $b1 = 50;
        $b2 = 40;
        $soma = 0;
        $media = 0;

        $soma = $b1 + $b2;
        $media = $soma / 2;

        if($media >= 60){
            echo "Aluno aprovado!<br>";
        }else if($media >= 40){
            echo "Aluno em recuperação!<br>";
        }else{
            echo "Aluno reprovado!<br>";
        }

        echo "Média: {$media}";
    
    ?>



<footer>
        <hr>
        <div style="margin: 0 auto; width: 20%; text-align: center; font-family: Verdana">
                &copy;
                <script>
                    document.write(new Date().getFullYear())
                </script><span> AADeveloper</span>
        </div>
    </footer>
</body>
</html>