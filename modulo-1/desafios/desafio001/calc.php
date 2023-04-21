<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../../../style.css">
  <title>Document</title>
</head>

<body>
  <?php
  $num = $_GET["num"] ? $_GET["num"] : 0;
  ?>

  <header>
    <h1>Resultado</h1>
  </header>
  <section>
    <p>Numero enviado: <strong><?= $num ?></strong></p>
    <p>Antecessor: <strong><?= $num - 1 ?></strong></p>
    <p>Sucessor: <strong><?= $num + 1 ?></strong></p>
  </section>
</body>

</html>