<?php

    //variaveis de contato
    $assunto    = "Contato pela Pagina | ";  
    $nome       = $_POST['nome'];
    $telefone   = $_POST['telefone'];
    $email      = $_POST['email'];
    $cep        = $_POST['cep'];
    $uf         = $_POST['uf'];
    $cidade     = $_POST['cidade'];
    $endereco   = $_POST['endereco'];
    $bairro     = $_POST['bairro'];
    $numero     = $_POST['numero'];
   // $mensagem   = $_POST['mensagem'];
    


//variaveis para envio
$email_destino  = ""; // Insira o Email que receberá o contato - exemplo: $email_destino  = "email@gmail.com";
$email_smtp     = ""; // Insira o Email fará o envio - exemplo: $email_smtp  = "email@gmail.com";
$senha_smtp     = ""; // Insira a senha do email que fará o envio - exemplo: $senha_smtp  = "5enh42022"; 
$smtp           = ""; // Insira o servidor smtp - exemplo: $senha_smtp  = "smtp@gmail.com";
$nome_empresa   = "Sua Empresa";// Insira o nome do responsavel pelo envio
$porta          = 587; // Porta padrão do serviço smtp - está definido a 587 como padrão.
$data_envio     = date('d/m/Y');
$hora_envio     = date('h:i');


// Chamando o autoload
require_once 'vendor/autoload.php';
   
  // Criando o Transport
$transport = (new Swift_SmtpTransport($smtp, $porta ))
  ->setUsername($email_smtp)
  ->setPassword($senha_smtp)
;

//Criando o Mailer usando o seu transport criado anteriormente
$mailer = new Swift_Mailer($transport);

//Corpo do E-mail - Observação: é possivel editar o email por  html.
 $corpo =("
Nome: $nome
Telefone: $telefone
E-mail: $email 
Cep: $cep
Estado: $uf | Cidade: $cidade
Endereço: $endereco
Bairro: $bairro | Numero: $numero
_____________________________________
Este e-mail foi enviado em: $data_envio | $hora_envio ");
 


// Formatando a menssagem.

$message = (new Swift_Message($assunto.$data_envio))
  ->setFrom([$email_smtp => $nome_empresa])
  ->setTo([$email_destino => $nome_empresa])
  ->setBody($corpo)
;
  

// Enviando a mensagem.
$result = $mailer->send($message);

// Após o envio, a pagina recarrega para o diretorio. 
echo "<meta http-equiv='refresh' content='3;URL=/enviaemail/index.php'>";
  
?>
