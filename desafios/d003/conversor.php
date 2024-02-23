<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversão</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>Conversor de Moedas v1.0</h1>
        
        <P>
            <?php 

            $n = $_REQUEST["n"] ?? 0;
            $c = $n / 4.96;
            
            // MANEIRA MAIS SIMPLES
            // NUMBER_FORMAT TIRA OU ACRESCENTA CASA DECIMAIS E FORMATO DE FLOATS "," OU "."
            // echo "Seus R$". number_format($n, 2, ",", ".")." equivalem a <strong>US$".number_format($c, 2, ",", ".") ."</strong><br>";
            // echo "<br><strong>*Cotação fixa de R$4,96</strong> informada diretamente no código";
            
            // MANEIRA MAIS COMPLETA
            $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);

            echo "Seus ". numfmt_format_currency($padrao, $n, "BRL")." equivalem a <strong>". numfmt_format_currency($padrao, $c, "USD") ."</strong><br>";
            echo "<br><strong>*Cotação fixa de R$4,96</strong> informada diretamente no código";
            ?>
        </P>
        <button onclick="javascript:history.go(-1)">Voltar</button>
    </main>
</body>
</html>