<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Primo ou não</title>
</head>

<body>
    <header>
        <h1>Primo ou não?</h1>
    </header>

    <div id="cont">
        <div id="form">
            <form action="heprimo.php" method="post">
                <div class="mb-3">
                    <label for="autoSizingInput" class="form-label">Número</label>
                    <input type="number" name="num" class="form-control" id="autoSizingInput" placeholder="Digite um número" style="width: 150px;">
                </div>

                <div class="mb-3">
                    <button type="submit" class="btn btn-primary">Enviar</button>
                </div>
            </form>
            <div id="cont">
                <div id="resposta">

                    <?php
                    $num = $_POST['num'];

                    function heprimo($num)
                    {
                        if ($num < 2) {
                            return false;
                        }

                        for ($i = 2; $i <= sqrt($num); $i++) {
                            if ($num % $i == 0) {
                                return false;
                            }
                        }

                        return true;
                    }

                    $result = heprimo($num);
                    echo "<p> Número $num é primo:" . ($result ? 'Sim' : 'Não') . "</p>";
                    ?>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN6jIeHz" crossorigin="anonymous"></script>
    <?php
    include('fotter.php')
    ?>

    <div id="voltar">
        <?php
        include('voltar.php')
        ?>
    </div>
</body>

</html>