<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio php</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        $minimo = 1_380.60;
        $salario = $_GET['sal'] ?? $minimo; 
    ?>
    <main>
        <h1>Informe seu salário</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="sal">Salário (R$)</label>
            <input type="number" name="sal" id="sal" value="<?=$salario?>" step="0.01">
            <p>considerando um salario minimo de <strong>R$<?=number_format($minimo, 2, ",", ".")?></strong></p>
            <input type="submit" value="Calcular">
        </form>
    </main>
    <section>
        <h2>Resultado final</h2>
        <?php 
            $tot = intdiv($salario, $minimo);
            $dif = $salario % $minimo;
            if($salario < $minimo){
                echo "<p>Quem recebe um salário de<strong> R\$".number_format($salario, 2, ",",".")."</strong>. Recebe menos que <strong>um</strong> salário mínimo </p>";      
            }else{

                echo "<p>Quem recebe um salário de<strong> R\$".number_format($salario, 2, ",",".")."</strong>. Recebe $tot salários mínimos. +<strong> R\$ ". number_format($dif, 2 , ",", ".") ."</strong></p>";
            };
        ?>
    </section>
</body>
</html>