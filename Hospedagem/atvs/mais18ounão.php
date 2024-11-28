<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Verificador de idade</title>
</head>

<body>
    <header>
        <br>
        <h1>Maior de 18?</h1>
    </header>

    <div id="cont">
        <div id="form">
            <form action="mais18ounão.php" method="post">
                <div class="mb-3">
                    <label for="autoSizingInput" class="form-label">Nome</label>
                    <input type="text" name="nome" metho class="form-control" id="autoSizingInput"
                        placeholder="Insira seu nome" style="width: 120px;">
                </div>

                <div class="mb-3">
                    <label for="autoSizingInputGroup" class="form-label">Idade</label>
                    <input type="number" name="idade" class="form-control" id="autoSizingInputGroup"
                        placeholder="Insira sua idade" style="width: 120px;">
                </div>

                <div class="mb-3">
                    <button type="submit" class="btn btn-primary">Envia</button>
                </div>
            </form>
            <div id="resposta">
                <?php
                $idade = $_POST["idade"];
                $nome = $_POST["nome"];

                if ($idade >= "18") {
                    echo "<p> Voce tem mais de 18 anos, $nome.</p>";
                } else {
                    echo "<p> Voce tem menos de 18 anos, $nome.</p>";
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