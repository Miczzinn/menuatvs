<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
    <form action="imc.php" method="post">
        <h3>Qual seu peso?</h3>
        <input type="number" name="peso">
        <h3>Qual sua altura?</h3>
        <input type="number" name="alt">
        <br>
        <input type="submit" envia>
    </form>
    <?php
    $alt = $_POST["alt"];
    $peso = $_POST["peso"];

    $alt = $alt / 100;
    $imc = $peso / ($alt * $alt);

    echo "Seu IMC é de: " . number_format($imc, 2);

    ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN6jIeHz" crossorigin="anonymous"></script>
    <?php include('fotter.php') ?>
    <div id="voltar">
        <?php
        include('voltar.php')
        ?>
    </div>

</body>

</html>