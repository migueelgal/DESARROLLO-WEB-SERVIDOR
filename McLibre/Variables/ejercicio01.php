<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $dado1=rand(1,6);
        $dado2=rand(1,6);

        print("<p>Actualice la página para mostrar un nuevo resultado</p>");
        print($dado1);
        print("<br>");
        print($dado2);

        print("<p>La suma de los dos es: " . $dado1+$dado2 . "</p>")

    ?>
</body>
</html>