<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado Final</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>Resultado Final</h1>
            <?php 
            $numero = $_GET["numero"];
            echo "<p>O numero escolhido foi <strong>$numero</Strong>. <br>";
            echo "O seu antecessor é ".($numero - 1).".<br>";
            echo "O seu sucessor é ".($numero + 1).".<br>";  
            ?>
    <button onclick="history.back()">⇦ Voltar</button>
    </main>
</body>
</html>