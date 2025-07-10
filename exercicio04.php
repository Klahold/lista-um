<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 4</title>
</head>

<body>
    <form action="" method="POST">

        <label for="numero">Insira um numero</label>
        <input type="number" id="numero" name="numero" required>

        <button type="submit" name="verifica_fatorial">Verificar</button>

    </form>

    <?php

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {

        if (isset($_POST['verifica_fatorial'])) {

            $numero = $_POST['numero'];

             $fatorial = 1;

            for ($i = $numero; $i >= 1 ; $i--) { 

                $fatorial *= $i;

            }
            echo $fatorial;
        };
    };

    ?>
</body>

</html>