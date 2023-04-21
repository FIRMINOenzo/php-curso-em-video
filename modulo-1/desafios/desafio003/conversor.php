<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../../../style.css">
  <title>Conversor de Dolar</title>
</head>

<?php
$valor = $_GET["valor"] ? $_GET["valor"] : 0;
const DOLAR = 4.94;

$conversao = $valor / DOLAR;

$padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);
?>

<body>
  <header>
    <h1>Resultado da Conversão</h1>
  </header>
  <section>
    <p>Seus <strong><?= numfmt_format_currency($padrao, $valor, "BRL") ?></strong> são
      <strong><?= numfmt_format_currency($padrao, $conversao, "USD") ?></strong>
    </p>
    <p>Valor do Dolar utilizado: <strong><?= numfmt_format_currency($padrao, DOLAR, "USD") ?></strong></p>
    <button onclick="javascript:history.go(-1)">Voltar</button>
  </section>
</body>

</html>