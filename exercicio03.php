<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 3</title>
</head>

<body>
    <form action="" method="POST">

        <label for="numero">Insira um numero</label>
        <input type="number" id="numero" name="numero" required>

        <button type="submit" name="verifica_positivo">Verificar</button>

    </form>

    <?php

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {

        if (isset($_POST['verifica_positivo'])) {

            $numero = $_POST['numero'];

            if ($numero >= 1) {
                echo "O número $numero é positivo";
            } else {
                if ($numero == 0) {
                    echo "O número $numero é zero";
                } else {
                    echo "O número $numero é negativo";
                }
                
            }
        };
    };

    ?>

</body>

</html>