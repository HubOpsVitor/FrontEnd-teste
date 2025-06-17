<?php
$secret = "SUA_SECRET_KEY_AQUI";
$response = $_POST['g-recaptcha-response'];

$verifica = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=$secret&response=$response");
$verifica = json_decode($verifica);

if ($verifica->success) {
    echo "CAPTCHA verificado com sucesso!";
    // continue com o processamento do formulário
} else {
    echo "Falha na verificação do CAPTCHA.";
}
?>
