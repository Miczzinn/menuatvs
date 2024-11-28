<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="temp.php" method="post">
        <h3> Informe a temperatura em graus celcius: </h3>
        <input type="number" name="celcius">
        <input type="submit" name="envia">
    </form>
    <?php
    $celcius = $_POST['celcius'];

    $fa = ($celcius * 1.8) + 32;

    echo $celcius . " ºC ja em Fahrenheit são  " . number_format($fa, 2) . "ºF";

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