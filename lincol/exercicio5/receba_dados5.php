<?php
//receber dados do formulario e guardar na memória
$custo = $_GET["custo"];
$frete = $_GET["frete"];
$despesas = $_GET["despesas"];
$venda = $_GET["venda"];

$custoTotal = $custo + $frete + $despesas;
$lucro = $venda - $custoTotal;
$porcentagemLucro = ($lucro / $custoTotal) * 100;


echo "O custo total é " .$custoTotal. " reais";
echo "A percentagem de lucro é " .$porcentagemLucro;
?>