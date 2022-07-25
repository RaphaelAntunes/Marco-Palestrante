<?php 

$nome = $_POST['nome'];
$telefone = $_POST['telefone'];
$email = $_POST['email'];
$assunto = $_POST['assunto'];
$mensagem = $_POST['mensagem'];

echo $nome;
echo $telefone;
echo $mensagem;


$to = "atendimento@marcodemoraes.com.br";
$subject = "Contato";
$body = "Nome: ".$nome. "\r\n".
        "Assunto: ".$assunto. "\r\n".
        "Email: ".$email. "\r\n".
        "Telefone: ".$telefone. "\r\n".
        "mensagem: ".$mensagem;

$header = "From: ".$email."". "\r\n";         
            "Reply-To:".$email."\r\n".
            "X=Mailer:PHP/".phpversion();

            if(mail($to,$subject,$body,$header))
              

?>