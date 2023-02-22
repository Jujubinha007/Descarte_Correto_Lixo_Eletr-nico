<?php 
session_start();
$id = @$_SESSION['id'];
include_once('conexao.php');
$consulta = "SELECT * FROM cadastro where id='$id'";
$resultado = @mysqli_query($conexao, $consulta);

if (isset($_REQUEST['Erro'])) {
    
  $local=$_SESSION['local'];
  $descr=$_SESSION['descr'];
  $marca=$_SESSION['marca'];
  $email=$_SESSION['email'];
  } else{
  
  $local='';
  $descr='';
  $marca='';
  $email='';
  }
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="../CSS/index.css">
    <script src="https://kit.fontawesome.com/d5522b3f96.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@800&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

<style>
.card-login{
  background-color: #228a22;
  border-radius: 25px;
  box-shadow: 0 2px 5px rgba(0, 0, 0, 0.3);
  width: 70%;
  border: 10px solid #c0d8c7;
  color: white;
  height: 500px;
  padding: 1%;
  margin: auto;
  margin-top: -2%;
}
  
.row{
  margin-left: 5%;
  margin-right: 5%;
}
     
div.header h1{
  color: white;
  font-family:  sans-serif;
  font-size: 2.5vw;
}
  
div.main-login{
  margin-top:1%;
}
  
div.col{
  padding: 12px;
}
  
div.col label{
  display: inline-block;
  margin-bottom: 5px;
  font-size: 130%;
  font-family:  sans-serif;
}
  
div.col input{
  border: 2px solid #f0f0f0;
  display: block;
  border-radius: 5px;
  font-size: 15px;
  padding: 5px;
}
  
div.col input::placeholder{
  font-size: 15px;
  color: gray;
}
  
select{
  border: 2px solid #f0f0f0;
  display: block;
  border-radius: 5px;
  font-size: 15px;
  padding: 5px;
}
  
.col select{
  width: 75%;
}
  
.textfield select{
  width: 36%;
}  
     
.nuvem img{
  width: 80%;
  margin-top: 5%;
}
  
.co2{
  margin-left: -88%;
  margin-top: -12%;
  width: 60%;
}
  
.des{
  color: #228a22;
  font-family: 'Open Sans', sans-serif;
  margin-top: 3%;
  font-size: 2.5vw;
}
  
.col button.btn-login{
  background-color: #fff;
  color:  #228a22;
  font-size: 1rem;
  padding: 2% 10%;
  border: white;
  font-family: 'Open Sans', sans-serif;
  border-radius: 6px;
  margin-left: 0%;
  margin-top: 7%;
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
</head>
<body>
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

<center> <h2 class="des"> Faça Seu Descarte!!! </h2> </center>
<br>
       

 <form name="descarte" action="descarte.php" method="POST">
  <div class="main-login">
    <div class="left-login"></div>
    <div class="right-login">
      <div class="card-login">
        <div class="header">
          <center> <h1> Cadastrar Descartar </h1> </center> 
        </div><br>

        <form class="row g-3">
          <div class="row">
            <div class="col">
              <label for="email">Marca ou Modelo:</label> 
              <input type="text" id="marca" value="<?php  echo $marca;?>" size="50%" name="marca" placeholder="Informe a marca...">
            </div>

            <div class="col">
              <label for="descr">Descrição:</label>
              <input type="text" value="<?php  echo $descr;?>" name="descr" size="50%" placeholder="Descreva detalhadamente o objeto...">
            </div>
          </div>
                    
          

          <form class="row g-3">
            <div class="row">
              <div class="col">
                <label for="local">Local de Descarte:</label> 
                <input type="text" value="<?php  echo $local;?>" name="local" placeholder="Informe o local..." size="50%">
              </div><br>
    
              <div class="col">
                <label for="tp">Tipo de Produto:</label> 
                <select name="tp">
                  <option>Opções...</option>
                    <?php
                      $result_categoria = "SELECT * FROM tipo_produto ";
                      $resultado_categoria = mysqli_query($conexao, $result_categoria);
                      while ($row_categ = mysqli_fetch_assoc($resultado_categoria)) { ?>
                  <option value="<?php echo $row_categ['tipop'];  ?>">
                      <?php echo $row_categ['tipop']; ?>
                  </option><?php }  ?>
                </select>
              </div><br>
            </div>

                     
          <form class="row g-3">
            <div class="row">
              <div class="col">
                <label for="tempo_uso">Tempo de uso: </label> 
                <select name="tempo_uso">
                  <option>Opções...</option>
                    <?php
                      $result_categoria = "SELECT * FROM tempo ";
                      $resultado_categoria = mysqli_query($conexao, $result_categoria);
                      while ($row_categ = mysqli_fetch_assoc($resultado_categoria)) { ?>
                  <option value="<?php echo $row_categ['tempo_uso'];  ?>">
                    <?php echo $row_categ['tempo_uso']; ?>
                  </option><?php } ?>
                </select>
              </div>

              <div class="col">
                <button type="submit" class="btn-login">Avançar</button>
              </div>     
            </div>
        </div>  
      </div> 
    </div>
</form>

<footer>
    © COPYRIGHT - TODOS OS DIREITOS RESERVADOS AO SUSTENTNET. 2022
</footer>

</body>
</html>