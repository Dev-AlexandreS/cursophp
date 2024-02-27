<!Dh1OCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>Resultado</h1>
        <?php
            
            $n = $_GET["n"] ?? 0;
            
            $v = $n % 2;

            if($n == 0){
                $r = "zero";
            }
            elseif($n != 0 && $v == 0){
                $r = "Par";
            }
            elseif($n != 0 && $v != 0){
                $r = "Impar";
            };
            
            echo "<p>O seu número é <strong>$r</strong></p>"
        ?>
        <button onclick="javascript:history.go(-1)">Voltar</button>
    </main>
</body>
</html>