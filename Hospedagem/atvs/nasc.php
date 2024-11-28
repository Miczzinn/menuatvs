<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="nasc.php" method="post">
        <h3>Qual seu ano de nascimento?</h3>
        <input type="number" name="anonasc">
        <input type="submit" name="envia">
    </form>
    <?php
    $anonasc = $_POST ['anonasc'];

    $idade = 2024 - $anonasc;

    echo "Sua idade é: $idade"

?>
<div id="voltar">
        <?php
        include('voltar.php')
        ?>
    </div>

    <?php include('fotter.php') ?>
</body>
</html>