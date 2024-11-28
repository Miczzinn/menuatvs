<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Média2</title>
</head>

<body>
    <header>
        <h1>Média</h1>
    </header>

    <div id="cont">
        <div id="form">
            <form action="media2.php" method="post">
                <div class="mb-3">
                    <label for="autoSizingInput" class="form-label">Nota 1</label>
                    <input type="number" name="n1" class="form-control" id="autoSizingInput" placeholder="Nota 1">
                </div>

                <div class="mb-3">
                    <label for="autoSizingInputGroup" class="form-label">Nota 2</label>
                    <input type="number" name="n2" class="form-control" id="autoSizingInputGroup" placeholder="Nota 2">
                </div>

                <div class="mb-3">
                    <label for="autoSizingInputGroup" class="form-label">Nota 3</label>
                    <input type="number" name="n3" class="form-control" id="autoSizingInputGroup" placeholder="Nota 3">
                </div>

                <div class="mb-3">
                    <button type="submit" class="btn btn-primary">Enviar</button>
                </div>
            </form>
            <div id="cont">
                <div id="resposta">

                    <?php
                    $n1 = $_POST['n1'];
                    $n2 = $_POST['n2'];
                    $n3 = $_POST['n3'];
                    function media($n1, $n2,  $n3)
                    {
                        return ($n1 + $n2 + $n3) / 3;
                    }
                    $result = media($n1, $n2, $n3);
                    echo "<p>Média = " . $result . "</p>";
                    ?>
                </div>
            </div>
        </div>
    </div>
    <?php include('fotter.php') ?>
    <div id="voltar">
        <?php
        include('voltar.php')
        ?>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN6jIeHz" crossorigin="anonymous"></script>
    <?php include('fotter.php') ?>
</body>

</html>