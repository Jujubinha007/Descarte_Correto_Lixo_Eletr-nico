<?php 
session_start();
$id = $_SESSION['id'];
include_once('conexao.php');
$consulta = "SELECT * FROM cadastro where id='$id'";
$resultado = mysqli_query($conexao, $consulta);
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Informações Pessoais</title>
    <link rel="stylesheet" type="text/css" href="../CSS/index.css">
    <script src="https://kit.fontawesome.com/d5522b3f96.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@800&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    
</head>
<style>
body{
    background: #248b24;
}

container{
    position: absolute;
    background-color: white;
    top: 20%;
    left: 25%;
    padding: 5px;
    border-radius: 20px;
    border: 10px solid #7dc38f;
    width: 50%;
    height: 70%;
    font-size: 20px;
    font-family: 'Open Sans', sans-serif;
}

container h1{
    text-align: center;
    font-size: 140%;
    font-family: 'Open Sans', sans-serif;
    color: #248b24;
    margin-top: 5%;
}

form{
    margin-left: 5%;
    margin-right: 5%;
    float: center;
    margin-top: 2%;
}

form input{
    border:none;
    border-bottom: 2px solid #248b24;
}

form button{
    display: flex;
    align-items: center;
    justify-content: center;
    width: 20%;
}

footer {
    position: fixed;
    bottom: 0;
    background-color: #75a335;
    color: #c0d8c7;
    width: 100%;
    height: 50px;    
    text-align: center;
    line-height: 50px;
    margin-top: 136px;
}

</style>
<nav  class="menu">
  <ul>
  <a href="index.php"><img class="lixo" src="../IMGS/LIXO.png"></a>
    <a href="index.php"><button class="dropbtn">MENU</button></a>
      
    <div class="dropdown">
      <a href="sobre.php"><button class="dropbtn">SOBRE</button></a>
    </div>

    <div class="dropdown">
      <a href="descarte1.php"><button class="dropbtn">DESCARTE</button></a>
    </div>
 
    <div class="dropdown">
      <a href="contato.php"> <button class="dropbtn"> CONTATO</button> </a> 
    </div>

    <div class="dropdown" style="margin-right: 2%;">
       <button class="dropbtn">
         Perfil
        <?php
            while($dados = mysqli_fetch_array($resultado))
            {
              $nomec = $dados['nomec'];
          ?>
        <label for=""><?= $nomec?></label>
          <?php } ?> 
          <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
            <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
            <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
          </svg>
      </button>

      <div class="dropdown-content">
        <a href="cadastrar.php"><h5> <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-person-plus" viewBox="0 0 16 16">
          <path d="M6 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H1s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C9.516 10.68 8.289 10 6 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z"/>
          <path fill-rule="evenodd" d="M13.5 5a.5.5 0 0 1 .5.5V7h1.5a.5.5 0 0 1 0 1H14v1.5a.5.5 0 0 1-1 0V8h-1.5a.5.5 0 0 1 0-1H13V5.5a.5.5 0 0 1 .5-.5z"/>
          </svg> Cadastrar</h5>
        </a>

        <a href="informperf.php"><h5> <svg xmlns="http://www.w3.org/2000/svg" width="19" height="19" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
          <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
          <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
          </svg>  Gerenciar meu perfil</h5>
        </a>

        <a href="meudescart.php"><h5><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-card-list" viewBox="0 0 16 16">
          <path d="M14.5 3a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-13a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h13zm-13-1A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-13z"/>
          <path d="M5 8a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7A.5.5 0 0 1 5 8zm0-2.5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5zm0 5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5zm-1-5a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0zM4 8a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0zm0 2.5a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0z"/>
        </svg>  Meus descartes</h5>
        </a>

        <a href="excluir.php"><h5><svg xmlns="http://www.w3.org/2000/svg" width="19" height="19" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
          <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
          <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
          </svg> Excluir</h5>
        </a>
        
        <div class="sair"></div>

        <a href="login.html"><h5> <svg xmlns="http://www.w3.org/2000/svg" width="19" height="19" fill="currentColor" class="bi bi-box-arrow-right" viewBox="0 0 16 16">
          <path fill-rule="evenodd" d="M10 12.5a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v2a.5.5 0 0 0 1 0v-2A1.5 1.5 0 0 0 9.5 2h-8A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-2a.5.5 0 0 0-1 0v2z"/>
          <path fill-rule="evenodd" d="M15.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 0 0-.708.708L14.293 7.5H5.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3z"/>
          </svg>SAIR</h5>
        </a>
    </div>
  </ul>
</nav>

<?php
$id = $_SESSION['id'];
include_once('conexao.php');
$consulta = "SELECT * FROM cadastro WHERE id = '$id'";
$resultado = mysqli_query($conexao, $consulta);

if (!$resultado) {
    echo '<a type="button">Erro</a><br><br>';
    die('<b>Query Inválida:</b>' . mysqli_error($conexao)); 
} else {
    $num = mysqli_num_rows($resultado);
    if ($num==0){
    echo "<b>Perfil não localizado !!!!<br><br>";
    exit;
    }else{
$dados = mysqli_fetch_assoc($resultado);
  }
}
mysqli_close($conexao);

?>
<body>
<container>
    <h1>INFORMAÇÕES PESSOAIS</h1><br>
    <form name="info" class="w3-container" action="espelhoinfo.php" method="POST">

        <div class="mb-3">
            <label class="form-label">Nome</label>
            <input type="text" class="form-control" name="nomec" value="<?php echo $dados['nomec']; ?>">
            <input type="hidden" name="idperf" value="<?php  echo $dados['id']; ?>">
        </div>

        <div class="mb-3">
            <label class="form-label">E-mail</label>
            <input type="text" class="form-control" name="email" value="<?php echo $dados['email']; ?>">
        </div>

        <div class="mb-3">
            <label class="form-label">Senha</label>
            <input type="password" class="form-control" name="senha" value="<?php echo $dados['senha']; ?>">
        </div><br>
        
        <center>
        <a href="espelhoinfo.php?id=<?php echo $dados['id'];?>"><button class="btn btn-success" type="submit">Alterar</button></a>
        <a href="index.php"><button class="btn btn-warning" type="button">Voltar</button></a>
        </center>
        <br><br>
    </form>
</container>

<footer>
    © COPYRIGHT - TODOS OS DIREITOS RESERVADOS AO SUSTENTNET. 2022
</footer>
</body>
</html>