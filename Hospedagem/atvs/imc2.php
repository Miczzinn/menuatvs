<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Cálculo de IMC</title>
</head>

<body>
    <header>
        <h1>Cálculo IMC</h1>
    </header>
    <div id="cont">
        <div id="form">
            <form action="imc2.php" method="post">
                <div class="mb-3">
                    <label for="autoSizingInput" class="form-label">Peso</label>
                    <input type="string" name="peso" class="form-control" id="autoSizingInput" placeholder="Insira seu peso" style="width: 150px;">
                </div>

                <div class="mb-3">
                    <label for="autoSizingInputGroup" class="form-label">Altura</label>
                    <input type="number" name="altura" class="form-control" id="autoSizingInputGroup" placeholder="Insira sua altura" style="width: 150px;">
                </div>

                <div class="mb-3">
                    <button type="submit" class="btn btn-primary">Envia</button>
                </div>
            </form>

            <div id="cont">
                <div id="resposta">
                    <?php
                    $alt = $_POST['altura'];
                    $peso = $_POST['peso'];
                    $alt = $alt / 100;
                    $imc = $peso / ($alt * $alt);

                    if ($imc <= 18.5) {
                        echo "<br> Seu IMC é de " . number_format($imc, 2) . ", você está abaixo do peso.";
                        echo "<br>";
                        echo '<img src="img/img1.png" class="img" alt="Cuidado" style="width:150px;"/>';
                        echo "<p>Cuidado!</p>";
                    } elseif ($imc >= 18.6 && $imc <= 24.9) {
                        echo "<br> Seu IMC é de " . number_format($imc, 2) . ", você está no peso ideal.";
                        echo "<br>";
                        echo '<img src="img/hgh.webp" class="img" alt="Aprovação" style="width:150px;"/> ';
                        echo "<p>Parabéns!</p>";
                    } elseif ($imc >= 25) {
                        echo "<br> Seu IMC é de " . number_format($imc, 2) . ", você está acima do peso.";
                        echo "<br>";
                        echo '<br> <img src="img/img1.png" class="img" alt="Cuidado" style="width:150px;"/> ';
                        echo "<p> Cuidado!</p>";
                    } else {
                        echo "<br> Por favor, forneça a altura e o peso.";
                    }
                    ?>
                </div>
            </div>
        </div>

    <div id="voltar">
        <?php
        include('voltar.php')
        ?>
    </div>

    <?php include ('fotter.php'); ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>

</html>