<?php
$servername = "localhost";
$username = "pedro99";
$password = "1234";
$dbname = "clinica_braganca123";


$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}
?>
