<?php

if(isset($_POST['email']) && !empty($_POST['email'])){
    $nome = addslashes($_POST['nome']);
    $email = addslashes($_POST['email']);
    $assunto = addslashes($_POST['assunto']);
    $mensagem = addslashes($_POST['mensagem']);

    $to = "missopaypal@gmail.com";
    $subject = $assunto;
    $body = "Nome: ".$nome. "\n".
            "Email: ".$email."\n".
            "Mensagem: ".$mensagem."\n". 
    $header = "From:missopaypal@gmail.com"."\n"
                "Reply-To:".$email."\n"
                ."X-Mailer:PHP/".phpversion();
}

?>    
