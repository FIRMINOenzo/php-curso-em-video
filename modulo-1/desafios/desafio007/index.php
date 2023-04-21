<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../../style.css">
    <title>Salario PHP</title>
</head>

<body>

    <?php
    $salario = $_POST["salario"] ?? 0;
    const SALARIO_MINIMO = 1380;

    $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);
    ?>

    <main>
        <h1>Informe seu Salário</h1>

        <form action="<?= $_SERVER["PHP_SELF"] ?>" method="post">
            <label for="salario">Salário</label>
            <input type="number" name="salario" id="salario" value="<?= $salario ?>" step="0.01">
            <input type="submit" value="Calcular">
            <p>Valor do salário minimo utilizado: <strong><?= numfmt_format_currency($padrao, SALARIO_MINIMO, "BRL") ?></strong></p>
        </form>
    </main>

    <?php
    if ($salario) {

        $salarioEmSM = intdiv($salario, SALARIO_MINIMO);
        $salarioSobra = $salario - (SALARIO_MINIMO * $salarioEmSM);

        echo "
            <section>
                <h2>Resultado Final</h2>

                <p>Quem recebe um salário de <strong>" . numfmt_format_currency($padrao, $salario, "BRL") . "</strong> ganha:</p>

                <ul>
                    <li> <strong>" . $salarioEmSM . "</strong> Salário(s) Mínimo(s)</li>
                    <li>+ <strong>" . numfmt_format_currency($padrao, $salarioSobra, "BRL") . "</strong></li>
                </ul>
            </section>
        ";
    }
    ?>
</body>

</html>