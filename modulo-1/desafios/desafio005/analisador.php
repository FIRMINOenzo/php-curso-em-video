<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../../../style.css">
  <title>Document</title>
</head>

<?php
$num = $_GET["num"] ? $_GET["num"] : 0;

echo $num;

$numDecimal = strlen(explode(".", $num)[1]);

$num = floatval($num);
$parteInteira = floor($num);
$parteReal = $num - $parteInteira;
?>

<body>
  <header>
    <h1>Resultado da Análise</h1>
  </header>
  <section>
    <p>O número analisado foi <strong><?= number_format($num, $numDecimal, ',', '.') ?></strong></p>
    <ul>
      <li>A parte inteira do número é <strong><?= number_format($parteInteira, 0, '', '.') ?></strong></li>
      <li>A parte real do número é <strong><?= number_format($parteReal, $numDecimal, ',', '.') ?></strong></li>
    </ul>
    <button onclick="javascript:history.go(-1)">Voltar</button>
  </section>
</body>

</html>