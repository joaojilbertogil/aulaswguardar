<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Controle de Despesas</title>
    <link rel="stylesheet" href="estilos_formulario.css">
    <link rel="stylesheet" href="estilos_menu.css">
</head>
<body>
    <?php
    require "menu.php";

    ?>
    <h3>CASASTRO DE CLIENTE</h3>
    <table>
    <tr>
           <td>
                <label for="nome">Nome: </label>
            <input type="text" name="nome" maxlength="50" size="40" required
            placeholder="Informe seu nome completo">
</td>
</tr>
<tr>
           <td>
                <label for="cidade">Cidade: </label>
            <input type="text" name="cidade" maxlength="50" size="40" required
            placeholder="Informe sua cidade">
</td>
</tr>
<tr>
           <td>
                <label for="cpf">CPF: </label>
            <input type="text" name="cpf" maxlength="50" size="40" required
            placeholder="Informe seu CPF">
</td>
</tr>
<tr>
           <td>
                <label for="email">E-mail: </label>
            <input type="email" name="email" maxlength="50" size="40" required
            placeholder="Informe seu E-mail">
</td>
</tr>
<tr>
           <td>
                <label for="contato">Contato: </label>
            <input type="text" name="contato" maxlength="50" size="40" required
            placeholder="Informe seu Contato">
</td>
</tr>
<tr>
           <td>
                <label for="DataNacimento">Dt.Nacs: </label>
            <input type="date" name="DataNacimento" maxlength="50" size="40" required>
</td>
</tr>
<tr>
    <td colspan="2" aling="center">
        <input type="submit" name="cadastrar" value="cadastrar">
</td>
</tr>
    </table>
</body>
</html>