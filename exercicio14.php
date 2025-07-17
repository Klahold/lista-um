<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="" method="POST">

        <label for="ano">Insira um ano</label>
        <input type="number" id="ano" name="ano" required>

        <button type="submit" name="verifica_ano">Verificar</button>

    </form>

    <?php

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {

        if (isset($_POST['verifica_ano'])) {

            $ano = ($_POST['ano']);

            $ultimo_digito = substr($ano, -1);

            $penultimo_digito = substr($ano, -2, 1);

            
            if ($ano % 4 == 0) {
                if ($ultimo_digito == 0 & $penultimo_digito == 0) {
                    if ($ano % 400 == 0) {
                        echo "O ano $ano é bissexto";
                    } else {
                        echo "O ano $ano não é bissexto";
                    }
                } else {
                    echo "O ano $ano é bissexto";
                }
            } else {
                echo "O ano $ano não é bissexto";
            }
        };
    };

    ?>
</body>

</html>