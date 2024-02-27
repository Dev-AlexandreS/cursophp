<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
</head>
<body>
    
    
    <main>
        <h1>Aqui esta o resultado!</h1>
        <p>

            <?php 
            $num = $_GET["ninforme"] ?? 0;
            $snum = $num + 1;
            $anum = $num - 1;
            
            echo "<h2>o numero informado é <strong>$num</strong></h2> ";
            echo "<li>O seu sucessor é <strong>$snum</strong></li>";
            echo "<li>O seu antecessor é <strong>$anum</strong></li>";
            
            ?>
        c
        <!-- retorna a pagina de historico  -->
        <!-- <button onclick="javascript:history.go(-1)">Voltar</button>     -->
    </p>
    </main>
</body>
</html>