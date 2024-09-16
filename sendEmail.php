<?php
$nome = $_POST['name'];
$email = $_POST['email'];
$msg = $_POST['message'];
$dataEnvio = date('d/m/Y');
$horaEnvio = date('H/i/s');

$arquivo = "
<html>
    <p><b>Nome: </b>$nome</p>
    <p><b>E-mail: </b>$email</p>
    <p><b>Mensagem: </b>$msg</p>
    <p>Este e-mail foi enviado em <b>$dataEnvio</b> às <b>$horaEnvio</b></p>
</html>
";

$destino = "gabrielroma1512@gmail.com";
$assunto = "Contato pelo site DigitalPrintPort";

$headers = "MIME-Version: 1.0\n";
$headers = "Content-type: text/html; charset=iso-8859-1\n";
$headers = "From: $nome <$email>";

mail($destino, $assunto, $arquivo, $headers);

echo "<meta http-equiv='refresh' ocntent='URL=../ctt.html'>";
?>