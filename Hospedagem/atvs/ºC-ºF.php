<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>ºC-ºF</title>
</head>

<body>
    <header>
        <h1>Qual a temperatura?</h1>
    </header>

    <div id="cont">
        <div id="form">
            <form action="ºC-ºF.php" method="post">
                <div class="mb-3">
                    <label for="autoSizingInput" class="form-label">Temperatura</label>
                    <input type="number" name="graus" class="form-control" id="autoSizingInput" placeholder="Qual a temperatura">
                </div>

                <div class="mb-3">
                    <button type="submit" class="btn btn-primary">Enviar</button>
                </div>
            </form>
            <div id="cont">
                <div id="resposta">

                    <?php
                    $graus = $_POST['graus'];

                    function CparaF($graus)
                    {
                        return ($graus * 9 / 5) + 32;
                    }
                    $result = CparaF($graus);
                    echo "<p>Temperatura em Fahrenheit =" . $result . "</p>";
                    ?>
                </div>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN6jIeHz" crossorigin="anonymous"></script>
        <?php include('fotter.php') ?>
        <div id="voltar">
            <?php
            include('voltar.php')
            ?>
        </div>
</body>

</html>