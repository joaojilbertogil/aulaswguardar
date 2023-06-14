<?php 
$host = "localhost";
$user = "root";
$pass = "usbw";
$banco = "bdespesas_joaogilberto";
$conexao = mysqli_connect($host, $user, $pass) or die (mysqli_error($conexao));
mysqli_select_db($conexao, $banco);
?>