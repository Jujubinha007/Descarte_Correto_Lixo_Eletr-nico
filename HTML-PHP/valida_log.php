<?php
	require_once('conexao.php');

	$email = $_POST['email'];

	$senha = $_POST['senha'];

	$sqlstring = "SELECT * FROM cadastro WHERE email = '$email' and senha='$senha'";

	$resultado = mysqli_query($conexao, $sqlstring);

	if (!$resultado)
    {
        die('<b>Registro Inválida: </b>' . mysqli_error($mysql));}

    $registro = mysqli_num_rows($resultado);	

	if($registro!=1){
		
        header("location:###.php");
	}
	else
	{
		$dados = mysqli_fetch_array($resultado);	
		session_start();
		$_SESSION['id'] = $dados['id'];
        $_SESSION['email'] = $dados['email'];
		$_SESSION['nome'] = $dados['nome'];	


        if($dados['admin1'] == 1) 
            header("location:index.php");
        else if($dados['admin1'] == 0 && $dados['admin1'] == null) 
    		header("location:informperf.php");
	}
?>