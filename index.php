<?php
require_once('class/temperatura.php');
$temp = new temperatura();

/* Chamando minhas funções com os valores a serem convertidos. O primeiro valor é a temperatura que eu quero converter e o segundo
valor é para qual temperatura eu devo converter: Celsius(0), Fahrenheit(1), Kelvin(2). 
O nome da função é dado para o tipo de temperatura que eu já tenho.*/
$temp->celsius(0, 1);
$temp->celsius(10, 2);
$temp->celsius(36, 1);
$temp->celsius(0, 2);

$temp->fahrenheit(0, 0);
$temp->fahrenheit(10, 2);
$temp->fahrenheit(36, 0);
$temp->fahrenheit(0, 2);

$temp->kelvin(0, 1);
$temp->kelvin(10, 0);
$temp->kelvin(36, 1);
$temp->kelvin(0, 0);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Conversor de Temperatura</title>
</head>
<body>
</body>
</html>