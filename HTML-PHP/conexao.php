<?php 

$user= "root";
$host= "localhost";
$senha= "usbw";
$banco= "compeco";

$conexao = new mysqli($host, $user, $senha, $banco);
mysqli_set_charset($conexao,'utf8');
if ($conexao -> connect_errno) {
    echo "Falha ao se conectar com o Banco de Dados:.
    (" . $conexao -> connect_errno .")" . $conexao -> connect_error;
  }

?>
