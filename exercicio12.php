<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 12</title>
</head>
<body>
     <form action="" method="POST">

        <label for="palavra">Escreva uma palavra</label>
        <input type="text" id="palavra" name="palavra" required>

        <button type="submit" name="verifica_vogais">Verificar</button>

    </form>

    <?php

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {

        if (isset($_POST['verifica_vogais'])) {

            $palavra = $_POST['palavra'];

            $vogais = substr_count($palavra, 'a')+substr_count($palavra, 'e')+substr_count($palavra, 'i')+substr_count($palavra, 'o')+substr_count($palavra, 'u');

            echo "A string $palavra tem $vogais vogais";
            
        };
    };

    ?>
</body>
</html>