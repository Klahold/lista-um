<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 13</title>
</head>
<body>
     <form action="" method="POST">

        <label for="graus">Insira uma temperatura em graus celsius</label>
        <input type="number" id="graus" name="graus" required>

        <button type="submit" name="graus_celsius">Verificar</button>

    </form>

    <?php

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {

        if (isset($_POST['graus_celsius'])) {

            $graus = $_POST['graus'];

            $fahrenheit = (($graus * 9/5) + 32);

            echo "A temperatura $graus em fahrenheit é $fahrenheit";
        };
    };

    ?>
</body>
</html>