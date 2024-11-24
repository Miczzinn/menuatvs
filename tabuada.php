<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Gerador de tabuada</title>
</head>

<body>
    <header>
        <h1>Digite um número e desubra sua tabuada</h1>
    </header>
    <div id="cont">
        <div id="form">
            <form action="tabuada.php" method="post">
                <div class="mb-3">
                    <label for="autoSizingInput" class="form-label">Escolha um número</label>
                    <input type="number" name="number" class="form-control" id="autoSizingInput" placeholder="Número" style="width: 150px;">
                </div>

                <div class="mb-3">
                    <button type="submit" class="btn btn-primary">Envia</button>
                </div>
            </form>
            
            <div id="cont">
                <div id="resposta">
                    <?php
                    $number = $_POST['number'];

                    for ($i = 1; $i <= 10; $i++) {
                        $resultado = $number * $i;
                        echo "<br>$number x $i = $resultado";
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
    <div id="voltar">
        <?php
        include('voltar.php')
        ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN6jIeHz" crossorigin="anonymous"></script>
    <?php include('fotter.php') ?>
</body>

</html>