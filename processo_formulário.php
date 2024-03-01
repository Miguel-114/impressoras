<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $Nome = $_POST["Nome"];
    $Email = $_POST["Email"];
    // Outros campos do formulário aqui

    // Configurações do e-mail
    $destinatario = "miguel.angelo.200714@gmail.com"; // Substitua pelo seu endereço de e-mail
    $assunto = "Novo formulário preenchido";

    // Corpo do e-mail
    $mensagem = "Nome: $Nome\nE-mail: $Email\n"; // Adicione outros campos aqui

    // Envie o e-mail
    mail($destinatario, $assunto, $mensagem);

    // Redirecione o usuário para uma página de confirmação
    header("Location: obrigado.html"); // Crie essa página
    exit;
}
?>
