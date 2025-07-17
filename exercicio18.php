<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 19</title>
</head>

<body>
    <form action="" method="POST">

        <label for="numero">Insira um o primeiro numero</label>
        <input type="number" id="numero" name="numero" required>

        <br>
        <br>
        <br>

        <label for="numero2">Insira um segundo numero</label>
        <input type="number" id="numero2" name="numero2" required>

        <br>
        <br>
        <br>

        <label for="numero3">Insira um terceiro numero</label>
        <input type="number" id="numero3" name="numero3" required>

        <br>
        <br>
        <br>

        <button type="submit" name="verifica_maior">Verificar</button>

    </form>

    <?php

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {

        if (isset($_POST['verifica_maior'])) {

            $numero = $_POST['numero'];

            $numero2 = $_POST['numero2'];

            $numero3 = $_POST['numero3'];


            if ($numero >= $numero2) {
                if ($numero >= $numero3) {
                    echo "$numero";
                }
            } else {
                if ($numero2 >= $numero3) {
                    echo "$numero2";
                } else {
                    echo "$numero3";
                }
            }
        };
    };

    ?>
</body>

</html>