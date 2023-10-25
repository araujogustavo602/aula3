<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="">
        <label >gastar</label>
        <input type="text" name="gastos">
        <input type="submit" value="Verificar">
    </form>

    <?php

        if (isset($_GET["gastos"])) //se estou utilizando uma função booleana não preciso colocar teste, ele vai buscar por condição verdadeira
        {

            if ($_GET["gastos"] >= 150)
            {
                echo "Você está gastando muito.";
            }
            else
            {
                echo "Seu gasto foi normal.";
            }

        }

       
    ?>
</body>
</html>