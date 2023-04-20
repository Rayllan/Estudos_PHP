<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio PHP 2</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>Trabalhando com números aleatórios</h1>
       <div>
            <p>
                <?php 
                    $numero_aletorio = mt_rand(0, 100);
                    echo "Gerando um número aleatório entre 0 a 100... <br>";
                    echo "O valor gerado foi <strong>$numero_aletorio</Strong>.";
                ?>
            </p>
       </div> 
            <button type="button" onclick="window.location.reload();">&#x1F504;Gerar Outro</button>
    </main>
</body>
</html>