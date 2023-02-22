<?php
session_start();
if (isset($_REQUEST['erro'])) {
    
$nomec=$_SESSION['nomec'];
$email=$_SESSION['email'];


} else{
$nomec='';
$email='';

}


?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Cadastrar</title>
    <link rel="stylesheet" href="../CSS/cadastrar.css">
</head>

<style>
a.voltar{
    text-decoration: none;
    font-size: 2em;
    color: lightgray;
    font-family:'Arial Narrow Bold';
    font-weight: bold;
    float: right;
    margin-top: -15%;
    margin-right: -10%;
}
</style>

<body>

<div id="form">
<a href="login.html" class="voltar">X</a>
    <form name="login" action="cadastro.php" method="POST">
        <h1 class="title"><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
            <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
            <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
          </svg> Cadastrar</h1>
        
        <label for="nomec">Nome:</label>
        <div class="input">
            <input type="text" value="<?php  echo $nomec;?>" name="nomec" placeholder="Informe seu Nome..." id="nome">
        </div>
        <br>

        <label for="email">Email:</label>
        <div class="input">
            <input type="email" value="<?php  echo $email;?>" name="email" placeholder="Informe seu E-mail..." id="email">
        </div>
        <br>

        <div id="btn" >
            <button type="submit">Cadastrar</button>
            <br><br>
           
        </div>
    </form>   
</div>
</form>
</body>
</html>