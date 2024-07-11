<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = htmlspecialchars($_POST['nome']);
    
    $to = "vinniciuslopes12@gmail.com";
    $subject = "50curtidas";
    $message = "Nome: " . $nome;
    $headers = "From: no-reply@seusite.com\r\n" .
               "Reply-To: no-reply@seusite.com\r\n" .
               "X-Mailer: PHP/" . phpversion();
    
    if (mail($to, $subject, $message, $headers)) {
        echo "E-mail enviado com sucesso!";
    } else {
        echo "Falha ao enviar o e-mail.";
    }
}
?>
