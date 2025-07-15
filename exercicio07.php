<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="" method="POST">

        <label for="numero">Insira um numero</label>
        <input type="number" id="numero" name="numero" required>

        <button type="submit" name="verificar_perfeito">Verificar</button>

    </form>

    <?php

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {

        if (isset($_POST['verificar_perfeito'])) {

            $numero = $_POST['numero'];

            $soma = 0;

            for ($i = 1; $i <= ($numero - 1); $i++) {

                if ($numero % $i === 0) {

                    $soma += $i;
                }
            }
            if ($soma == $numero) {
                echo "O numero $numero é perfeito";
            } else {
                echo "O numero $numero não é perfeito";
            }
        };
    };

    ?>
</body>

</html>