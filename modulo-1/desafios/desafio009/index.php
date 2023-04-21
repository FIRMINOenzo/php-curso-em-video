<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../../../style.css">
    <title>Calculo de média</title>
</head>

<body>

    <?php
    $n1 = $_GET["n1"] ?? 0;
    $n2 = $_GET["n2"] ?? 0;
    $p1 = $_GET["p1"] ?? 0;
    $p2 = $_GET["p2"] ?? 0;
    ?>

    <main>
        <h1>Informe dois valores e seus pesos</h1>

        <form action="<?= $_SERVER["PHP_SELF"] ?>" method="get">
            <label for="n1">Primeiro valor</label>
            <input type="number" name="n1" id="n1" value="<?= $n1 ?>">
            <label for="p1">Peso</label>
            <input type="number" name="p1" id="p1" value="<?= $p1 ?>">
            <label for="n2">Segundo valor</label>
            <input type="number" name="n2" id="n2" value="<?= $n2 ?>">
            <label for="p2">Peso</label>
            <input type="number" name="p2" id="p2" value="<?= $p2 ?>">
            <input type="submit" value="Calcular">
        </form>
    </main>

    <?php
    if ($n1 && $n2 && $p1 && $p2) {
        $mediaSimples = number_format((($n1 + $n2) / 2), 2);
        $mediaPonderada = number_format(($n1 * $p1 + $n2 * $p2) / ($p1 + $p2), 2);

        echo "
            <section>
                <h2>Resultado</h2>
                <p>Média Aritimética Simples: <strong>$mediaSimples</strong></p>
                <p>Média Aritimética Ponderada: <strong>$mediaPonderada</strong></p>
            </section>
        ";
    }
    ?>

</body>

</html>