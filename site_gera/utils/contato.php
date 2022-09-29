<?php
$emailcontato=$_POST['projeto.gerasol@gmail.com'];
$nome = $_POST['nome'];
$email = $_POST['email'];
$titulo =$_POST['titulo'];
$conteudo = $_POST['conteudo'];

$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
$headers .= 'From: $nome <$email>';


if(mail($emailcontato, $titulo, $conteudo, $headers))
{
    echo"<script>alert('EMAIL ENVIADO')</script>";
}
else{
    echo"<script>alert('EMAIL NAO ENVIADO')</script>";
}
?>