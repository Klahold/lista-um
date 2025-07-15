<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 11</title>
</head>

<body>
    <form action="" method="POST">

        <label for="palavra">Escreva uma palavra</label>
        <input type="text" id="palavra" name="palavra" required>

        <button type="submit" name="verifica_palíndromo">Verificar</button>

    </form>

    <?php

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {

        if (isset($_POST['verifica_palíndromo'])) {

            $palavra = $_POST['palavra'];

            $palavraInvertida = strrev($palavra);

            if ($palavra === $palavraInvertida) {
                echo "A $palavra é um palindromo";
            } else {
                echo "A $palavra não é um palindromo";
            }
        };
    };

    ?>
</body>

</html>