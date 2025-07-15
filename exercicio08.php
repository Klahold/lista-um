<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 8</title>
</head>

<body>
    <form action="" method="POST">

        <label for="numero">Insira um numero</label>
        <input type="number" id="numero" name="numero" required>

        <button type="submit" name="verifica_num">Verificar</button>

    </form>

    <?php

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {

        if (isset($_POST['verifica_num'])) {

            $numero = $_POST['numero'];

            $soma = 0;

            for ($i = 1; $i <= ($numero - 1); $i++) {

                if ($i % 2 === 0) {

                    $soma += 1;
                }
            }
            if ($soma == 1) {
                echo "Existem $soma numero par entre 1 e o $numero";
            } else {
                echo "Existem $soma numeros pares entre 1 e o $numero";
            }
        };
    };

    ?>
</body>

</html>