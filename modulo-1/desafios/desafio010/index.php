<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../../style.css">
    <title>Calculo de idade</title>
</head>

<body>

    <?php
    $dataNascimento = $_POST["dataNascimento"] ?? 0;
    $dataDesejada = $_POST["dataDesejada"] ?? date('Y-m-d');
    ?>

    <main>
        <h2>Calcular sua idade em determinado ano</h2>
        <form action="<?= $_SERVER["PHP_SELF"] ?>" method="post">
            <label for="dataNascimento">Data de Nascimento</label>
            <input type="date" name="dataNascimento" id="dataNascimento" value="<?= $dataNascimento ?>">
            <label for="dataDesejada">Data que deseja saber</label>
            <input type="date" name="dataDesejada" id="dataDesejada" value="<?= $dataDesejada ?>">
            <input type="submit" value="Calcular">
        </form>
    </main>

    <?php
    if ($dataNascimento) {
        $dataNascimento = new DateTime($dataNascimento);
        $dataDesejada = new DateTime($dataDesejada);
        $interval = $dataNascimento->diff($dataDesejada);

        echo "
            <section>
                <h2>Resultado</h2>
                <p>
                    Quem nasceu em <strong>" . $dataNascimento->format('d/m/Y') . "</strong>
                    terá <strong>" . $interval->format('%y anos') . "</strong> em <strong>" . $dataDesejada->format('d/m/Y') . "</strong>
                </p>
            </section>
        ";
    }
    ?>

</body>

</html>