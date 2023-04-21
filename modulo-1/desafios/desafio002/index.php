<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../../../style.css">
  <title>Gerador de número</title>
</head>

<body>
  <header>
    <h1>Gerador de Número</h1>
  </header>
  <section>
    <p>Gerando números aleatórios entre 0 e 100</p>
    <p>O valor gerado foi <strong><?= mt_rand(0, 100) ?></strong></p>

    <a href="javascript:location.reload()"><button><?= "\u{1f504}" ?> Gerar outro número</button></a>
  </section>

</body>

</html>