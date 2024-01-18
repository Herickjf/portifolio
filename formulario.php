<?php

$nome = addslashes($_POST['nome']);
$email = addslashes($_POST['email']);
$tel = addslashes($_POST['telefone']);
$mesage = addslashes($_POST['mensagem']);

$to = "herick.jose@academico.ifpb.edu.br";
$assunto = "Tentativa de contato - PORTIFÓLIO";

$corpo_email = "Nome: " . $nome . "\n" . "E-mail: " . $email . "\n" . "Telefone: " . $tel . "\n\n" . $mesage;

$cabeca_email = "From: herick.jose@academico.ifpb.edu.br" . "\n" . "Reply-to: " . $email . "\n" . "X-Mailer: PHP/" . phpversion(); 

if (mail($to, $assunto, $corpo_email, $cabeca_email)) {
    echo("Email enviado com sucesso!");
} else {
    echo("Houve um erro ao enviar o email!");
}
?>
