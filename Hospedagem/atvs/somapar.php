<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Somar Números Pares</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <header>
        <h1>Somar Números Pares de 1 até N</h1>
    </header>
    <div id="cont">
        <div id="form">
            <form action="somapar.php" method="post">
                <div class="mb-3">
                    <label for="autoSizingInput" class="form-label">Digite um númer</label>
                    <input type="number" name="num" class="form-control" id="autoSizingInput" placeholder="Insira valor 1" style="width: 120px;">
                </div>

                <div class="mb-3">
                    <button type="submit" class="btn btn-primary">Envia</button>
                </div>
            </form>
            <div id="cont">
                <div id="resposta">
                    <?php
                    $num = intval($_POST["num"]);
                    $soma = 0;
                    $i = 1;

                    while ($i <= $num) {
                        if ($i % 2 == 0) {
                            $soma += $i;
                        }
                        $i++;
                    }

                    echo "<p>A soma dos números pares de 1 até $num é: $soma</p>";
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