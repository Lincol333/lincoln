<?php
//receber dados do formulario e guardar na memória
$reais = $_GET["reais"];

$dolares = $reais * 5.16;

echo "O valor convertido vai ser de " .$dolares. " dolares";
?>