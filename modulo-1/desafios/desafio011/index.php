<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>



<body>
    <form action="<?= $_SERVER["PHP_SELF"] ?>" method="get">
        <label for="porcentagem" id="display">Percentual de aumento</label>
        <input type="range" value="0" min="0" max="100" id="porcentagem" name="porcentagem" oninput="display.value=value" onchange="display.value=value">
        <input type="submit" value="enivar">
    </form>
</body>

<script src="app.js"></script>

<?php
echo $_GET["porcentagem"];
?>

</html>