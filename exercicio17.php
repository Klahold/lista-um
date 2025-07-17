<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 17</title>
</head>

<body>
    <form action="" method="POST">

        <label for="data">Insira uma data</label>
        <input type="number" id="dia" name="dia" placeholder="Dia" required>
        <input type="number" id="mes" name="mes" placeholder="Mes" required>
        <input type="number" id="ano" name="ano" placeholder="Ano" required>

        <button type="submit" name="verifica_data">Verificar</button>

    </form>

    <?php

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {

        if (isset($_POST['verifica_data'])) {

            $dia = $_POST['dia'];
            $mes = $_POST['mes'];
            $ano = $_POST['ano'];

            if (checkdate($mes,$dia,$ano)) {
                echo "Data valido";

            }else {
                echo "Data invalida";
            }
        };
    };

    ?>
</body>

</html>