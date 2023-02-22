<?php
session_start();
include_once('conexao.php');
$marca = mysqli_escape_string($conexao, $_POST['marca']);
$descr = mysqli_escape_string($conexao, $_POST['descr']);
$local = mysqli_escape_string($conexao, $_POST['local']);
$tipop = mysqli_escape_string($conexao, $_POST['tp']);
$tempo =  mysqli_escape_string($conexao, $_POST['tempo_uso']);
$id=mysqli_escape_string($conexao, $_POST['iddesc']);

//criando a linha de UPDATE
$sqlupdate = "UPDATE descarte SET  local = '$local', descr = '$descr', tipop ='$tipop', marca = '$marca', tempo='$tempo' 
 WHERE id = '$id' ";

$resultado = mysqli_query($conexao, $sqlupdate);

$resp = "Descarte atualizado com sucesso!";
$respE = ('Atualização Inválida: '. mysqli_error($conexao));

if (!$resultado){
	die ('<script>alert("'. $respE.'"); </script>');
}else{
echo "<script>window.alert('$resp'); 
window.location.href = 'meudescart.php';
</script>";
}
//echo $sqlupdate;
mysqli_close($conexao);

?>