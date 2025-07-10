<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 1</title>
</head>

<body>
    <form action="" method="POST">

        <label for="numero">Insira um numero</label>
        <input type="number" id="numero" name="numero" required>

        <button type="submit" name="verifica_par">Verificar</button>

    </form>

    <?php

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {

        if (isset($_POST['verifica_par'])) {

            $numero = $_POST['numero'];

            if ($numero % 2 == 0) {
                echo "O numero $numero é par";
            } else {
                echo "O numero $numero é impar";
            }
            
        };
    };

    ?>
</body>

</html>