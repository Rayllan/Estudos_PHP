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
        <h1>Conversor de Moedas v1.0 </h1>
                <?php 
                    $reais = $_GET["reais"] ?? 0;
                    $dolar = 5.08;
                    $conversao = $reais / $dolar;
                    //echo "Seus R\$" . number_format($reais, 2, ",", ".") . " equivalem a <strong>US$" . number_format($conversao, 2, ",", "."). "</Strong><br>";
                    $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);

                    echo "Seus ". numfmt_format_currency($padrao, $reais, "BRL") . " equivalem a ". numfmt_format_currency($padrao, $conversao, "USD") . "<p> ▪️ Cotação de "."<strong>" . numfmt_format_currency($padrao, $dolar, "USD") ."</Strong>" . " informada diretamente no código.</p>";
                    //echo "<p> ▪️ Cotação de <strong>US\$$dolar</Strong> informada diretamente no código.<br>";
                ?>
            <button onclick="history.back()">Voltar</button>
    </main>
</body>
</html> 