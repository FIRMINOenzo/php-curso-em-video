<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../style.css">
    <title>Document</title>
</head>
<body>

    <?php 
        $v1 = $_GET["num1"] ?? 0;
        $v2 = $_GET["num2"] ?? 0;
    ?>

    <main>
        <h1>Somador de Valores</h1>
        <form action="<?=$_SERVER["PHP_SELF"]?>" method="get">
            <label for="num1">Número 1</label>
            <input type="number" name="num1" id="num1" value="<?=$v1?>">
            <label for="num2">Número 2</label>
            <input type="number" name="num2" id="num2" value="<?=$v2?>">
            <input type="submit" value="Somar">
        </form>
    </main>

    <?php 
    if($v1 && $v2) {
        $soma = $v1 + $v2;

        echo "
            <section>
                <h2>Resultado da Soma</h2>
                <p>A soma entre os valores $v1 e $v2 é <strong>igual a $soma</strong></p>
            </section>
        ";
    }
    ?>

</body>
</html>