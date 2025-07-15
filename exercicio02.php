<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 2</title>
</head>

<body>
    <form action="" method="post">

        <label for="numero">Insira um numero</label>
        <input type="number" id="numero" name="numero" required>

        <button type="submit" name="tabuada">Tabuada</button>

    </form>
    <?php

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {

        if (isset($_POST['tabuada'])) {

            $numero = $_POST['numero'];

            for ($i = 0; $i < 10; $i++) {
                $tabuada = $numero * $i;
                echo '<br>';
                echo $tabuada;
            }
        };
    };

    ?>



</body>

</html>