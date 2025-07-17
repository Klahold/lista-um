<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 16</title>
</head>
<body>
    <form action="" method="POST">

        <label for="nome">Insira seu nome</label>
        <input type="text" id="nome" name="nome" required>

        <br>
        <br>
        <br>

        <label for="idade">Insira sua idade</label>
        <input type="number" id="idade" name="idade" required>

        <br>
        <br>
        <br>

        <button type="submit" name="verifica_ano">Verificar</button>

    </form>

    <?php

    if (($_SERVER['REQUEST_METHOD'] == 'POST') && (isset($_POST['verifica_ano']))) {

        $nome = ($_POST['nome']);

        $idade = ($_POST['idade']);

        if ($idade < 16) {
            echo "voce $nome não pode votar";
        } else {
            echo "voce $nome pode votar";
        }
        

    }
    ?>
</body>
</html>