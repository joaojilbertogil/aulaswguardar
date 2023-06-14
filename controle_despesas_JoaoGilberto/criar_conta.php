<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Login</title>
    <link rel="stylesheet" href="estilos_login.css">
</head>
<body>
    <div class="container">
       <h3>Cadastro de Login</h3>
       <form name="login" method="post" acttion="">
           <div class="form_grupo">
               <label for="usuario">Usuário:</label>
               <input type="text" name="usuario" maxlength="30" required>



           </div>
           <div class="form_grupo">
                <label for="senha">Senha:</label>
                <input type="password" name="senha" maxlength="20" required>

            </div>
             <input type="submit" name="acessar" value="Acessar" >
       </form>
    </div>
    <?php 
    if(isset($_POST["cadastrar"]))
    {
        $usuario = $_POST["usuario"];
        $senha = $_POST["senha"];
        require "conexao.php";
        $sql="INSERT INTO tblogin (codigo, usuario, senha)";
        $sql="VALUES (null, '$usuario', '$senha')";
        mysqli_query($conexao, $sql) or die (mysqli_error($conexao));
        echo "<h3>Login cadastrado</h3>";
    }
    ?>
    
</body>
</html>