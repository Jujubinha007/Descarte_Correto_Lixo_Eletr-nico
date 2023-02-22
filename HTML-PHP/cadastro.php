
<?php 

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require './vendor/autoload.php';

function GeraSenha($qtyCaracters = 5){

    $maiusculas = str_shuffle('ABCDEFGHIJKLMNOPQRSTUVWXYZ');
    $numeros = (((date('Ymd')/12)*24)+ mt_rand(800,9999));
    $numeros .= 1234567890;

    $characters = $maiusculas.$numeros;

    $senha = substr(str_shuffle($characters),0,$qtyCaracters);
    
    return $senha;

}

function EnviaEmail($nomec, $email, $senha){   

    $mail = new PHPMailer(true);

    try{
        //$mail->SMTPDebug  = SMTP::DEBUG_SERVER;
        $mail->CharSet    = 'UTF-8';
        $mail->isSMTP();
        $mail->Host       = 'smtp.gmail.com';
        $mail->SMTPAuth   = true;
        $mail->Username   = 'lixoeletronico3in@gmail.com';
        $mail->Password   = 'ngewbykafrvdmnaz';
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port       = 587;

        //Destinatario 
        $mail->setFrom('lixoeletronico3in@gmail.com','Equipe TCC'); // E-mail e nome de quem está enviando
        $mail->addAddress("$email", "$nomec"); //E-mail e nome de quem está recebendo
        
        //Conteudo
        $mail->isHTML(true);
        $mail->Subject ='Confirmação de Cadastro'; //Título do e-mail
        $mail->Body    ="Olá $nomec, <br><br>Sua conta foi criada com sucesso, segue o seus dados de primeiro acesso:<br>Login: $email<br>Senha: $senha.<br>Acesse sua conta no site e altere sua senha. "; //Informações do e-mail com HTML
        $mail->AltBody ="Olá $nomec, \n\nSua conta foi criada com sucesso, segue o seus dados de primeiro acesso:\nLogin: $email\nSenha: $senha.\nAcesse sua conta no site e altere sua senha. ";//Informações do e-mail em formato de texto

        $mail->send();

        //echo 'E-mail enviado com sucesso!';
    }catch(Exception $e){
        echo "Erro: Não foi possivel enviar o E-mail.";
        //echo "Erro: Não foi possivel enviar o E-mail.  Erro PHPMailer: {$mail->ErrorInfo}";
    }
}

session_start();
include_once('conexao.php');
$nomec = mysqli_escape_string($conexao, $_POST["nomec"]);
$email = mysqli_escape_string($conexao, $_POST["email"]);
$senha = mysqli_escape_string($conexao, GeraSenha());

$teste=true;
if (strlen($nomec)==0) {
    $teste=false;
}
if (strlen($email)==0) {
    $teste=false;
}
if (strlen($senha)==0) {
    $teste=false;
}

if ($teste==true) {
    
    $sqlinsert = "INSERT INTO cadastro (nomec, email, senha)
    VALUES ('$nomec', '$email', '$senha')";

    $result = mysqli_query($conexao, $sqlinsert);
    if (!$result) 
    {
        die('Falha ao cadastrar usuário: ' . mysqli_error($conexao));  
    } else    {
        EnviaEmail($nomec, $email, $senha);
        echo "<script>alert('Usuário Cadastrado com Sucesso!!!');window.location='login.html';</script>";
    } 
    mysqli_close($conexao);
}

else{

  $_SESSION['nomec']=$nomec;
  $_SESSION['email']=$email;
  $_SESSION['senha']=$senha;
header("location: cadastrar.html?Erro");
}

?>
