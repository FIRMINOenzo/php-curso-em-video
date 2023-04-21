<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../../../style.css">
  <title>Conversor Dolar 2.0</title>
</head>

<?php
date_default_timezone_set("America/Sao_Paulo");
$dataAtual = date("m-d-Y");
$dataInicio = date("m-d-Y", strtotime("-7 days"));

$padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);

$url = "https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial='$dataInicio'&@dataFinalCotacao='$dataAtual'&\$top=1&\$orderby=dataHoraCotacao%20desc&\$format=json&\$select=cotacaoCompra";

$dados = json_decode(file_get_contents($url), true);

$cotacao = $dados["value"][0]["cotacaoCompra"];

$valor = $_GET["valor"] ? $_GET["valor"] : 0;

$conversao = $valor / $cotacao;
?>

<body>
  <header>
    <h1>Resultado da Conversão</h1>
  </header>
  <section>
    <p>Seus <strong><?= numfmt_format_currency($padrao, $valor, "BRL") ?></strong> são
      <strong><?= numfmt_format_currency($padrao, $conversao, "USD") ?></strong>
    </p>
    <p>Cotação pega via API do Banco Central: <strong><?= numfmt_format_currency($padrao, $cotacao, "USD") ?></strong>
    </p>
    <button onclick="javascript:history.go(-1)">Voltar</button>
  </section>
</body>

</html>