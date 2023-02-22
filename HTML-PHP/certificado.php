<?php
session_start(); 
$id = @$_SESSION['id'];
include_once('conexao.php');
$consulta = "SELECT * FROM cadastro where id='$id'";
$resultado = @mysqli_query($conexao, $consulta);

?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Certificado </title>
    <link rel="stylesheet" type="text/css" href="../CSS/index.css">  
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@800&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@900&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/d5522b3f96.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

<style type="text/css">
*{
  margin: 0 auto;
  padding: 0;
  box-sizing:border-box;
}

body{
  background-color: #fff;
}

a{
  text-decoration: none;
}
 
p{
  text-align: center;
  color: white;
  font-size: 3vw;
  font-family: sans-serif;
}
 
 div.container1{
  background-color: white;
  position: absolute;
  top: 55%;
  left: 27%;
  transform: translate(-50%, -50%);
  padding: 1%;
  border-radius: 35px;
  width: 25%;
  height: 20%;
  margin: auto;
  margin-top: 5%;
}

div.container1 h1{
  text-align: center;
  font-size: 3rem;
  font-family: 'Open Sans', sans-serif;
  color: #217621;
  padding: 2%;
  cursor: pointer;
} 

div.container2{
  background-color: white;
  position: absolute;
  top: 55%;
  left: 70%;
  transform: translate(-50%, -50%);
  padding: 1%;
  border-radius: 35px;
  width: 25%;
  height: 20%;
  margin: auto;
  margin-top: 5%; 
}

div.container2 a h1{
  font-size: 3rem;
  font-family: 'Open Sans', sans-serif;
  color:  #ff241f;
  cursor: pointer;
  text-decoration: none; 
  padding: 2%;   
} 

container{
  background-color: #228a22;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  padding: 2%;
  border-radius: 25px;
  border: 10px solid #c0d8c7;
  width: 70%;
  height: 50%;
  margin: auto;
  margin-top: 0%;
} 

container h1{
  text-align: center;
  font-size: 4vw;
  font-family: 'Open Sans', sans-serif;
  color: #fff;
}

</style>
        
</head>
<body>
<nav  class="menu">
  <ul>
    <img class="lixo" src="../IMGS/LIXO.png">
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

<container>
  <h1> Descarte Concluído</h1>
  <p>Você deseja ter o certificado de descarte?</p>

<?php 
include_once('conexao.php');
$sqlconsulta = @"SELECT * FROM cadastro where nomec='$nomec'";
$resultado = @mysqli_query($conexao, $sqlconsulta);
while ($dados = @mysqli_fetch_array($resultado, MYSQLI_ASSOC))
{   
?>

  <div class="container1">
   <h1 onclick="gerarPDF()"><svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-check-lg" viewBox="0 0 16 16">
    <path d="M12.736 3.97a.733.733 0 0 1 1.047 0c.286.289.29.756.01 1.05L7.88 12.01a.733.733 0 0 1-1.065.02L3.217 8.384a.757.757 0 0 1 0-1.06.733.733 0 0 1 1.047 0l3.052 3.093 5.4-6.425a.247.247 0 0 1 .02-.022Z"/>
    </svg> SIM </h1>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.4.1/jspdf.debug.js" 
        integrity="sha512-6HmJ9Y5PZWQVCd4KUwIaSgtDskfsykB+Fvm8Nq98GVCMHstaVoX9jqDdwSyGCbmJy5eLs/DXgDE3SXRS+2B2yA==" 
        crossorigin="anonymous"></script>
        <script language="javascript">
            function gerarPDF(){
                var doc = new jsPDF()
                var imgData = new Image()
                    imgData.src = '../IMGS/LIXO.png'
                    doc.addImage(imgData, 'png', 10, 10, 50, 50)
                var nome = "<?php echo $nomec; ?>"
                
                //var nome = "<?php //echo $nomec; ?>"

                doc.setTextColor(3, 100, 45)
                doc.setFontSize(50)
                doc.setFontStyle("bold")
                doc.text(60, 35, 'CERTIFICADO')

                doc.setTextColor(44, 61, 52)
                doc.setFontSize(30)
                doc.text(60, 50, 'De Descarte Consciente')

                doc.setFontSize(50)
                doc.setFontStyle("italic")
                doc.setTextColor(3, 100, 45)
                doc.text(80, 100, nome)

                doc.setTextColor(25, 54, 65)
                doc.setFontSize(20) 
                doc.setFontStyle(" ") 
                doc.text(40, 125, 'Parabéns por fazer um descarte consciente!!!')

                doc.setTextColor(25, 54, 65)
                doc.setFontSize(20) 
                doc.setFontStyle(" ") 
                doc.text(20, 140, 'Você acaba de reduzir o impacto sobre o meio ambiente e ')
                doc.setTextColor(25, 54, 65)
                doc.setFontSize(20) 
                doc.setFontStyle(" ") 
                doc.text(55, 150, 'trazer benefícios para o planeta. ')

                doc.setTextColor(25, 54, 65)
                doc.setFontSize(20) 
                doc.setFontStyle("bold") 
                doc.text(30, 180, 'O SustentNet fica feliz em poder te ajudar, nessa')
                doc.setTextColor(25, 54, 65)
                doc.setFontSize(20) 
                doc.setFontStyle("bold") 
                doc.text(60, 190, 'trajetória de sustentabilidade.')

                doc.setTextColor(3, 100, 45)
                doc.setFontSize(30) 
                doc.setFontStyle("Georgia") 
                doc.setFontStyle("bold")
                doc.text(60, 250, '----- SustentNet -----')
                        
                doc.save('certificado.pdf')
            }
            </script>
  </div>
<?php
}
?>

  <div class="container2">
    <a href="meudescart.php"><h1><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-x-lg" viewBox="0 0 16 16">
    <path d="M2.146 2.854a.5.5 0 1 1 .708-.708L8 7.293l5.146-5.147a.5.5 0 0 1 .708.708L8.707 8l5.147 5.146a.5.5 0 0 1-.708.708L8 8.707l-5.146 5.147a.5.5 0 0 1-.708-.708L7.293 8 2.146 2.854Z"/>
    </svg> NÃO </h1></a>
  </div>
</container>
<footer>
    © COPYRIGHT - TODOS OS DIREITOS RESERVADOS AO SUSTENTNET. 2022
</footer>
</body>
</html>