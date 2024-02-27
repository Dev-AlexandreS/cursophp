<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <main>
        <h1>Atualizar dados</h1>
        <?php 
            include("conexao.php");
            
            $nome = $_POST["n"];
            
            $cod = $_REQUEST["cod"];
            
            $email = $_POST["e"];
            
            $senha = $_POST["s"];
            
            $sql = "SELECT * FROM usuarios";
                
                
            $resultado = mysqli_query($conexao, $sql);
        
            if(mysqli_num_rows($resultado)){
                echo "<table class='table'>
                            <tr>
                                <th>id</th>
                                <th>nome</th>
                                <th>email</th>
                                <th>senha</th>
                            </tr>";
                while($row=mysqli_fetch_assoc($resultado)){
                    echo "<tr><td>". $row['id']."</td>";
                    echo "<td>". $row['nome']."</td>";
                    echo "<td>". $row['email']."</td>";
                    echo "<td>". $row['senha']."</td></tr>";
                }
                echo"</table>";
            }
            else{
                echo "zero resultados";
            };
             
        ?>

    </main>
            <section>

                <h2>Digite os itens que deseja alterar</h2>
                <form action="<?=$_SERVER['PHP_SELF']?>" method="post">
                    <label for="cod">Digite o id à ser atualizado</label>
                    <input type="number" name="cod" id="cod">
                    
                    <label for="n">Digite o nome à ser atualizado</label>
                    <input type="text" name="n" id="n">

                    <label for="e">Digite o email à ser atualizado</label>
                    <input type="email" name="e" id="e">

                    <label for="s">Digite a senha à ser atualizada</label>
                    <input type="text" name="s" id="s">

                    <input type="submit" value="Atualizar" onclick="return window.alert('Atualizado com sucesso')">
                </form>
                <?php
              
                    $update = "UPDATE usuarios SET nome = '$nome', email = '$email', senha = '$senha' WHERE id = '$cod'";

                    mysqli_query($conexao, $update);

                    mysqli_close($conexao);
                ?>
            </section>

</body>
</html>