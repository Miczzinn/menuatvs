<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Mostrar Números</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <header>
        <h1>Mostrar Números de 0 até N</h1>
    </header>
    <div id="cont">
        <div id="form">
            <form action="" method="post">
                <div class="mb-3">
                    <label for="autoSizingInput" class="form-label">Número</label>
                    <input type="number" name="num" class="form-control" id="autoSizingInput" placeholder="Insira número" required>
                </div>

                <div class="mb-3">
                    <button type="submit" class="btn btn-primary">Enviar</button>
                </div>
            </form>
            <div id="cont">
                <div id="resposta">

                    <?php
                    $num = intval($_POST["num"]);
                    $i = 0;

                    echo "<p>Números de 0 até $num:</p>";
                    while ($i <= $num) {
                        echo "$i ";
                        $i++;
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
    </div>

    <?php include('fotter.php') ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN6jIeHz" crossorigin="anonymous"></script>

</body>

</html>