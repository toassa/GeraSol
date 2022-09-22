<?php

    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $titulo = $_POST['titulo'];
    $conteudo = $_POST['conteudo'];

    $to = "projeto.gerasol@gmail.com";
    $subject = "Contato Site Gera - ". $titulo;
    $body = "Nome: ". $nome. "\n".
            "Email: ". $email. "\n".
            "Mensagem: ". $conteudo;
    $header = "From:".$email."\n".
                "Reply-To:".$email."\n".
                "X=Mailer:PHP/".phpversion();

    if(mail($to, $subject, $body, $header)){
        //header("location:G2_carrinho_front.php");
        echo "<script type='text/javascript'>alert('E-mail enviado com sucesso!')</script>";  
    }else{
        echo "<script type='text/javascript'>alert('Houve um erro durante o envio do e-mail')</script>";  
    }

?>