<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>
    <!-- data e hora no sistema com php -->
    <h1>Exemplo de PHP </h1>
    <?php 
        date_default_timezone_set("America/Sao_Paulo");//GMT -3
        echo "Hoje é dia ". date("d/M/Y");
        echo "E a hora atual é ". date("G:i:s");
    ?>
</body>
</html>