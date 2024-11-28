<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Soma</title>
</head>

<body>
    <header>
        <br>
        <h1>Soma</h1>
    </header>

    <div id="cont">
        <div id="form">
            <form action="soma.php" method="post">
                <div class="mb-3">
                    <label for="autoSizingInput" class="form-label">Valor 1</label>
                    <input type="number" name="v1" class="form-control" id="autoSizingInput" placeholder="Insira valor 1" style="width: 120px;">
                </div>

                <div class="mb-3">
                    <label for="autoSizingInputGroup" class="form-label">Valor 2</label>
                    <input type="number" name="v2" class="form-control" id="autoSizingInputGroup" placeholder="Insira valor 2" style="width: 120px;">
                </div>

                <div class="mb-3">
                    <button type="submit" class="btn btn-primary">Envia</button>
                </div>
            </form>
            <div id="cont">
            <div id="resposta">

            <?php
            $v1 = $_POST['v1'];
            $v2 = $_POST['v2'];

            function soma($v1, $v2)
            {
                return $v1 + $v2;
            }

            $resultado = soma($v1, $v2);
            echo "<p> Soma = " . $resultado . "</p>" ;
            ?>
        </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN6jIeHz" crossorigin="anonymous"></script>
    <?php include('fotter.php') ?>
    <div id="voltar">
        <?php
        include('voltar.php')
        ?>
    </div>
</body>

</html>