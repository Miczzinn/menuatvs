<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Cálculo desconto</title>
</head>

<body>
    <header>
        <h1>Cálculo desconto</h1>
    </header>
    <div id="cont">
        <div id="form">
            <form action="desconto2.php" method="post">
                <div class="mb-3">
                    <label for="autoSizingInput" class="form-label">Valor do produto</label>
                    <input type="string" name="produto" class="form-control" id="autoSizingInput" placeholder="Valor do produto" style="width: 150px;">
                </div>

                <div class="mb-3">
                    <label for="autoSizingInputGroup" class="form-label">Tipo de cliente</label>
                    <select name="cliente" class="form-control" id="autoSizingInputGroup" style="width: 150px;">
                        <option value="premium">Premium</option>
                        <option value="comum">Comum</option>
                    </select>
                </div>

                <div class="mb-3">
                    <button type="submit" class="btn btn-primary">Envia</button>
                </div>
            </form>
            <div id="cont">
                <div id="resposta">
                    <?php
                    $produto = floatval($_POST['produto']);
                    $cliente = $_POST['cliente'];

                    if ($cliente == 'comum') {
                        $clientecomum = $produto - ($produto * 0.05);
                        echo "Você é um cliente comum, sua compra com um desconto de 5% ficou R$ " . number_format($clientecomum, 2, ',', '.');
                    } elseif ($cliente == 'premium') {
                        $clientepremium = $produto - ($produto * 0.1);
                        echo "Você é um cliente premium, sua compra com um desconto de 10% ficou R$ " . number_format($clientepremium, 2, ',', '.');
                    } else {
                        echo "Tipo de cliente não reconhecido.";
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
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