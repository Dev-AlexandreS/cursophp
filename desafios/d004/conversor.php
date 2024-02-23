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
        <h1>Conversor de Moedas v2.0</h1>
        
        <P>
            <?php
            // cotação vinda do banco central
            // usando lib intl (internallization)
            $inicio = date("m-d-Y", strtotime("-7 days"));
            $fim = date("m-d-Y");
        
        
            $url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\''.$inicio.'\'&@dataFinalCotacao=\''.$fim.'\'&$top=1&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,dataHoraCotacao';
        
            $dados = json_decode(file_get_contents($url), true);
        
            $cotação = $dados["value"][0]["cotacaoCompra"];
            
            $n = $_REQUEST["n"] ?? 0;
            $c = $n / $cotação;
            
            // função de internalização de moeda
            $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);

            echo "Seus ". numfmt_format_currency($padrao, $n, "BRL")." equivalem a <strong>". numfmt_format_currency($padrao, $c, "USD") ."</strong><br>";
            echo "<br><strong>*Cotação informada diretamente do <a href='https://www.bcb.gov.br/'>Banco do Brasil</a>";
            ?>
        </P>
        <button onclick="javascript:history.go(-1)">Voltar</button>
    </main>
</body>
</html>