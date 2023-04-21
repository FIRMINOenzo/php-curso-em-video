<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../../style.css">
    <title>Raízes de um Número</title>
</head>

<body>

    <?php
    $numero = $_GET["numero"] ?? 0;
    ?>

    <main>
        <h1>Raízes de um número</h1>

        <form action="<?= $_SERVER["PHP_SELF"] ?>" method="get">
            <label for="numero">Digite um número</label>
            <input type="number" name="numero" id="numero" value="<?= $numero ?>">
            <input type="submit" value="Calcular">
        </form>
    </main>

    <?php
    if ($numero) {
        $raizQuadrada = number_format($numero ** (1 / 2), 2);
        $raizCubica = number_format($numero ** (1 / 3), 2);


        echo "
            <section>
                <h2>Resultado</h2>
                <p>Analisando o número <strong>$numero</strong>, temos:</p>
                <ul>
                    <li>A raiz quadrada é: <strong>$raizQuadrada</strong></li>
                    <li>A raiz cúbica é: <strong>$raizCubica</strong></li>
                </ul>
            </section>
        ";
    }
    ?>

</body>

</html>