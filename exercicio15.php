<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="" method="POST">

        <label for="peso">Insira seu peso</label>
        <input type="number" id="peso" name="peso" required>

        <br>
        <br>
        <br>

        <label for="altura">Insira sua altura</label>
        <input type="number" id="altura" name="altura" required>

        <br>
        <br>
        <br>

        <button type="submit" name="verifica_ano">Verificar</button>

    </form>

    <?php

    if (($_SERVER['REQUEST_METHOD'] == 'POST') && (isset($_POST['verifica_ano']))) {

        $peso = ($_POST['peso']);

        $altura = ($_POST['altura']) / 100;

        $imc = $peso / ($altura * $altura);

        if ($imc <= 18.5) {
            echo "O seu IMC é $imc, e sua classificação é: Magreza";
        } else if ($imc >= 18.5 & $imc <= 24.9) {
            echo "O seu IMC é $imc, e sua classificação é: Normal";
        } else if ($imc >= 25.0 & $imc <= 29.9) {
            echo "O seu IMC é $imc, e sua classificação é: Sobrepeso";
        } else if ($imc >= 30.0 & $imc <= 39.9) {
            echo "O seu IMC é $imc, e sua classificação é: Obesidade";
        } else {
            echo "O seu IMC é $imc, e sua classificação é: Obesidade Grave";
        };
    };
    ?>
</body>

</html>