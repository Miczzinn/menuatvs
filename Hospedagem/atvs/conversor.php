<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
    <form action="conversor.php" method="post">
        <h3>Quantos reais você tem?</h3>
        <input type="number" name="reais">
        <input type="submit" name="envia">
    </form>
    <?php
    $reais = $_POST['reais'];

    $dolar = $reais / 5.50;
    echo "<h3>Você tem " . number_format($dolar, 2, ',', '.') .  " Dólares (USD)</h3>";
    echo "<br>";

    $Ariarymalgaxe = $reais / 0.0012;
    echo "<h3>Você tem " . number_format($Ariarymalgaxe, 2, ',', '.') .  " Ariary malgaxe (MGA)</h3>";
    echo "<br>";

    $Afeganeafegao = $reais / 0.083;
    echo "<h3>Você tem " . number_format($Afeganeafegao, 2, ',', '.') .  " Afeganes afegãos (AFN)</h3>";
    echo "<br>";

    $Bahttailandes = $reais / 0.17;
    echo "<h3>Você tem " . number_format($Bahttailandes, 2, ',', '.') .  " Bahts tailandeses (THB)</h3>";
    echo "<br>";

    $Balboapanamenha = $reais / 5.58;
    echo "<h3>Você tem " . number_format($Balboapanamenha, 2, ',', '.') .  " Balboas panamenhas (PAB)</h3>";
    echo "<br>";

    $Birretiop = $reais / 0.046;
    echo "<h3>Você tem " . number_format($Birretiop, 2, ',', '.') .  " Birrs etíopes (ETB)</h3>";
    echo "<br>";

    $Bolivarvenezuelano = $reais / 0.0000015;
    echo "<h3>Você tem " . number_format($Bolivarvenezuelano, 2, ',', '.') .  " Bolívares venezuelanos (VES)</h3>";
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