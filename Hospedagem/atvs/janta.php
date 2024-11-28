<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="janta.php" method="post">
        <h3>Qual o valor da sua conta?</h3>
        <input type="number" name="conta">
        <br>
        <input type="submit" name="envia">
    </form>
    <?php
    $conta = $_POST['conta'];

    $total = $conta + ($conta * 0.1);

    echo "O total da sua conta foi de: $total R$"

    ?>
    <div id="voltar">
        <?php
        include('voltar.php')
        ?>
    </div>

    <?php include('fotter.php') ?>
</body>

</html>