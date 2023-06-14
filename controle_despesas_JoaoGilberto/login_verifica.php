<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verificar Login</title>
</head>
<body>
    <h3>VERIFICAR LOGIN</h3>
    <?php 
    $usuario = $_POST["usuario"];
    $senha   = $_POST["senha"];

    session_start();
    $_SESSION["usuario"] = $usuario;
    $_SESSION["senha"] = $senha;

    echo "<a herf='principal.php'>Acesso Permitido</a>";

    
    
    ?>
    
</body>
</html>