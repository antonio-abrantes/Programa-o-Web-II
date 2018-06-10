<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Projeto</title>
    <link rel="stylesheet" href="css/estilos.css">
</head>
<body>

    <h1>Projeto Web</h1>
    <hr>

    <?php
        $A = 10;
        $B = 3;
        $C = $A % $B;
        $A .= $B;
        //print $C;
        print $A;

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