<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $url= $_POST["url"];
    $mensagem = $_POST["assunto"];

    // Define os destinatários e o assunto do e-mail
    $para = "brayham.capellato@espro.org.br";
    $assunto = "Mensagem do formulário do site";

    // Monta o corpo do e-mail com os dados do formulário
    $corpo = "Nome: " . $nome . "<br>";
    $corpo .= "E-mail: " . $email . "<br>";
    $corpo .= "Link: " . $url . "<br>";
    $corpo .= "Assunto: " . $mensagem . "<br>";

    // Define os cabeçalhos do e-mail
    $headers = "From: " . $email . "\r\n";
    $headers .= "Reply-To: " . $email . "\r\n";
    $headers .= "Content-type: text/html; charset=UTF-8\r\n";

    // Envia o e-mail
    mail($para, $assunto, $corpo, $headers);

    // Exibe uma mensagem de sucesso
    echo "Mensagem enviada com sucesso!";
}
?>