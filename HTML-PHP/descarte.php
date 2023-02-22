<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Descarte</title>
</head>
<body>

<?php
session_start();
include_once('conexao.php');

$local = mysqli_escape_string($conexao, $_POST["local"]);
$descr = mysqli_escape_string($conexao, $_POST["descr"]);
$tp = mysqli_escape_string($conexao, $_POST["tp"]);
$marca= mysqli_escape_string($conexao, $_POST["marca"]);
$tempo_uso= mysqli_escape_string($conexao, $_POST["tempo_uso"]);
$email=$_SESSION['email'];

$descarte=true;
if (strlen($local)==0) {
    $descarte=false;
}
if (strlen($descr)==0) {
    $descarte=false;
}
if (strlen($marca)==0) {
    $descarte=false;
}

if ($descarte==true) {


$sqlinsert = "INSERT INTO descarte (email, local, descr, tipop, marca, tempo)
VALUES ('$email', '$local', '$descr', '$tp', '$marca', '$tempo_uso')";

$result = mysqli_query($conexao, $sqlinsert);
if (!$result) 
{
    die('Falha ao fazer descarte: ' . mysqli_error($conexao));  
} else    {

    header('Location: certificado.php');
} 
mysqli_close($conexao);

}

else{

    $_SESSION['local']=$local;
    $_SESSION['descr']=$descr;
    $_SESSION['marca']=$marca;
  header("location: descarte1.php?Erro");
  }
?>

<!-- <button><a role="button" href="index.html">Voltar</a></button>
<button><a role="button" href="descarte1.php">Novo Cadastro de Descarte</a></button>
<button><a role="button" href="sobre.html">Pontos de Descarte</a></button> -->
</body>
</html>