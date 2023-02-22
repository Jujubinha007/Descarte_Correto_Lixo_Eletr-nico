<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Informações Pessoais</title>
</head>
<body>
<?php
session_start();
include_once('conexao.php');

	// recuperando 
	$nomec = mysqli_escape_string($conexao, $_POST['nomec']);
	$email = mysqli_escape_string($conexao, $_POST['email']);
    $senha = mysqli_escape_string($conexao, $_POST['senha']);
	$id=mysqli_escape_string($conexao, $_POST['idperf']);	

	// criando a linha do  UPDATE
	$sqlupdate =  "UPDATE cadastro SET nomec='$nomec', email='$email', senha ='$senha' WHERE id ='$id'";

	$resultado = mysqli_query($conexao, $sqlupdate);
	if (!$resultado) {
		echo '<input type="button" onclick="window.location='."'informperf.php'".';" value="Voltar"><br><br>';
		die('<b>Query Inválida:</b>' . mysqli_error($conexao)); 
	} else {
		echo "<script>window.location='index.php'; alert('Perfil Alterado Com Sucesso!!!')</script>";
	} 
	mysqli_close($conexao);
?>
<br>
<button><a href="informperf.php" role="button">Voltar</a></button>
</body>
</html>