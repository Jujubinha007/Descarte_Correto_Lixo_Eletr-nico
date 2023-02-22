<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Deletar Conta</title>
	<meta http-equiv="Content-Type" content="text/html" charset="utf-8"> 
	<meta charset="utf-8"/>
</head>
<body>
<?php 
$id = $_POST['id'];
$opc = $_POST['confirma'];
include_once ('conexao.php');
$sqldelete = "DELETE FROM cadastro WHERE id='$id'";
if ($opc == "SIM") 
{
	mysqli_query($conexao, $sqldelete) or die ("Erro de exclusão");
	mysqli_close($conexao);
    header('Location: index.php');
}
else
{
	header('Location: index.php');
}
// echo $sqldelete;
?>
	
</body>
</html>