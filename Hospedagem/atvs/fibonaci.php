<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Gerador de Sequência de Fibonacci</title>
</head>

<body>
    <header>
        <h1>Gerador de Sequência de Fibonacci</h1>
    </header>

    <div id="cont">
        <div id="form">
            <form method="post" action="fibonaci.php">
                <div class="mb-3">
                    <label for="autoSizingInput" class="form-label">Digite o número de termos</label>
                    <input type="number" name="termos" class="form-control" id="autoSizingInput" placeholder="Número de termos">
                </div>
                <div class="mb-3">
                    <button type="submit" class="btn btn-primary">Enviar</button>
                </div>
            </form>

            <div id="resposta">
                <?php
                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    $num_termos = intval($_POST["termos"]);
                    $fib_sequence = [];

                    $a = 0;
                    $b = 1;

                    for ($i = 0; $i < $num_termos; $i++) {
                        $fib_sequence[] = $a;
                        $next = $a + $b;
                        $a = $b;
                        $b = $next;
                    }

                    echo "<p>Sequência de Fibonacci:</p>";
                    echo "<p>" . implode(", ", $fib_sequence) . "</p>";
                } else {
                    echo "<p>Insira o número de termos para gerar a sequência.</p>";
                }
                ?>
            </div>
        </div>
    </div>

    <?php
    include('fotter.php')
    ?>
    <div id="voltar">
        <?php
        include('voltar.php')
        ?>
        </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN6jIeHz" crossorigin="anonymous"></script>
</body>

</html>