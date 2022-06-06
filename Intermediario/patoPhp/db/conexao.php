<?php
$servidor = "localhost";
$usuario = "root";
$senha = "";
$banco = "formulario";

// Create connection
$conn = mysqli_connect($servidor, $usuario, $senha, $banco);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";

function limparPost($dado){
    $dado = trim($dado);
    $dado = stripslashes($dado);
    $dado = htmlspecialchars($dado);
    return $dado;
}
?>