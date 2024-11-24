<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Calculo de média</title>
</head>

<body>
    <header>
        <h1>Calculo de média</h1>
    </header>
    <div id="cont">
        <div id="form">
            <form action="media.php" method="post">
                <div class="mb-3">
                    <label for="autoSizingInput" class="form-label">Nota 1</label>
                    <input type="number" name="n1" metho class="form-control" id="autoSizingInput"
                        placeholder="Insira sua 1ª nota" style="width: 150px;">
                </div>

                <div class="mb-3">
                    <label for="autoSizingInputGroup" class="form-label">Nota 2</label>
                    <input type="number" name="n2" class="form-control" id="autoSizingInputGroup"
                        placeholder="IInsira sua 2ª nota" style="width: 150px;">
                </div>

                <div class="mb-3">
                    <button type="submit" class="btn btn-primary">Envia</button>
                </div>
            </form>
            <?php
            $n1 = $_POST["n1"];
            $n2 = $_POST["n2"];

            $media = ($n1 * 0.4) + ($n2 * 0.6);

            if ($media >= "7") {
                echo "<p>Voce foi aprovado com media $media!</p>";
            } else {
                echo "<p>Voce reprovou com media $media!</p>";
            }
            ?>
        </div>
    </div>
    <div id="voltar">
        <?php
        include('voltar.php')
        ?>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN6jIeHz" crossorigin="anonymous"></script>
    <?php include('fotter.php') ?>
</body>

</html>