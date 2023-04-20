<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>Analisador de Número Real</h1>
            <?php
            $numero = $_GET["numero"]?? 0;
            echo "<p>Analisando o número <strong>". number_format($numero, 3 ,",", ".") ."</Strong>, informado pelo usuario:</p>";
            $inteiro = intval($numero);
            $fracao = fmod($numero, 1);
            echo "<ul><li> Aparte inteira do número é <strong>". number_format($inteiro, 0,",", ".") ."</Strong>.</li>";
            echo "<li> Aparte fracionaria do número é <strong>" . number_format($fracao, 3 ,",", ".") . "</Strong>.</li></ul>";
            ?>
    <button onclick="history.back()">Voltar</button>
    </main>
</body>
</html>