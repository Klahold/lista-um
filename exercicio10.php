<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 10</title>
</head>

<body>
    <form action="" method="POST">

        <label for="numero">Insira um numero</label>
        <input type="number" id="numero" name="numero" required>

        <button type="submit" name="fibonacci">Verificar</button>

    </form>

    <?php

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {

        if (isset($_POST['fibonacci'])) {

            $numero = $_POST['numero'];

            function fibonacci($numero)
            {
                if ($numero == 0)
                    return 0;
                else if ($numero == 1)
                    return 1;


                else
                    return (fibonacci($numero - 1) + fibonacci($numero - 2));
            }

            for ($i = 0; $i < $numero; $i++) {
                echo '<br>';
                echo fibonacci($i);
            }
        };
    };

    ?>
</body>

</html>