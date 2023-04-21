<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../../style.css">
    <title>Divisão</title>
</head>

<body>

    <?php
    $dividendo = $_GET["dividendo"] ?? 0;
    $divisor = $_GET["divisor"] ?? 0;
    ?>

    <main>
        <h1>Estrutura de uma Divisão</h1>
        <form action="<?= $_SERVER["PHP_SELF"] ?>" method="get">
            <label for="dividendo">Dividendo</label>
            <input type="number" name="dividendo" id="dividendo" value="<?= $dividendo ?>">
            <label for="divisor">Divisor</label>
            <input type="number" name="divisor" id="divisor" value="<?= $divisor ?>">
            <input type="submit" value="Dividir">
        </form>
    </main>

    <?php
    if ($dividendo && $divisor) {

        echo "
            <section>
                <h2>Resultado da Divisão</h2>

                <table class='divisao'>
                    <tr>
                        <td>$dividendo</td>
                        <td>$divisor</td>
                    </tr>
                    <tr>
                        <td>" . $dividendo % $divisor . "</td>
                        <td>" . intdiv($dividendo, $divisor) . "</td>
                    </tr>
                </table>
            </section>
        ";
    }
    ?>

</body>

</html>