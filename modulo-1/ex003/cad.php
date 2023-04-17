<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>Resultado</title>
</head>

<body>
  <header>
    <h1>Resultado do Formulário</h1>
  </header>
  <main>
    <?php
    $nome = $_GET["nome"] ? $_GET["nome"] : "A";
    $sobrenome = $_GET["sobrenome"] ? $_GET["sobrenome"] : "A";

    echo "<p>Bem vindo <strong>$nome $sobrenome</strong>, esse é o meu site!</p>";
    ?>
    <p><a href="javascript:history.go(-1)">Voltar para página inicial</a></p>
  </main>
</body>

</html>