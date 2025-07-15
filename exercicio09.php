<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 9</title>
</head>

<body>
    <form action="" method="POST">

        <label for="numero">Insira o numero 1</label>
        <input type="number" id="numero" name="numero" required>

        <br>
        <br>
        <br>

        <label for="numero2">Insira o numero 2</label>
        <input type="number" id="numero2" name="numero2" required>

        <br>
        <br>
        <br>

        <button type="submit" name="verificar_soma">Verificar</button>

    </form>

    <?php

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {

        if (isset($_POST['verificar_soma'])) {

            $numero = $_POST['numero'];

            $numero2 = $_POST['numero2'];

            $soma = -1;

            if ($numero > $numero2) {
                echo "O numero 2 tem que ser maior que o numero 1 ";
            } else {
                for ($i = $numero; ($i) <= ($numero2 - 1); $i++) {

                    $soma += $i;
                }
                echo "A soma de todos os números entre $numero e o $numero2 é $soma";
            }
        };
    };

    ?>

</body>

</html>