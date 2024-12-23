<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Calculator</title>
</head>

<body>
    <header>
        <h1>Calculadora</h1>
    </header>
    <div id="cont">
        <div id="form">
            <form action="calculator.php" method="post">
                <div class="mb-3">
                    <label for="autoSizingInput" class="form-label">Valor 1</label>
                    <input type="number" name="numero1" class="form-control" id="autoSizingInput" placeholder="Primeiro valor" style="width: 150px;">
                    <label for="autoSizingInput" class="form-label">Valor 2</label>
                    <input type="number" name="numero2" class="form-control" id="autoSizingInput" placeholder="Segundo valor" style="width: 150px;">
                </div>

                <div class="mb-3">
                    <label for="autoSizingInputGroup" class="form-label">Operação</label>
                    <select name="operacao" class="form-control" id="autoSizingInputGroup" style="width: 150px;">
                        <option value="soma">Soma</option>
                        <option value="subtracao">Subtracao</option>
                        <option value="multiplicacao">Multiplicacao</option>
                        <option value="divisao">Divisao</option>
                        <option value="resto">Resto</option>
                        <option value="raiz">Raiz</option>
                        <option value="exponenciacao">Exponenciacao</option>
                    </select>
                </div>

                <div class="mb-3">
                    <button type="submit" class="btn btn-primary">Envia</button>
                </div>
            </form>
            <div id="cont">
                <div id="resposta">

                    <?php
                    $numero1 = $_POST['numero1'];
                    $numero2 = $_POST['numero2'];
                    $operacao = $_POST['operacao'];

                    switch ($operacao) {
                        case 'soma':
                            $resultado = $numero1 + $numero2;
                            break;

                        case 'subtracao':
                            $resultado = $numero1 - $numero2;
                            break;

                        case 'divisao':
                            if ($numero2 != 0) {
                                $resultado = $numero1 / $numero2;
                            } else {
                                $resultado = "Erro: Divisão por zero.";
                            }
                            break;

                        case 'multiplicacao':
                            $resultado = $numero1 * $numero2;
                            break;

                        case 'resto':
                            if ($numero2 != 0) {
                                $resultado = $numero1 % $numero2;
                            } else {
                                $resultado = "Erro: Divisão por zero.";
                            }
                            break;

                        case 'raiz':
                            if ($numero1 >= 0) {
                                $resultado = sqrt($numero1);
                            } else {
                                $resultado = "Erro: Raiz de número negativo.";
                            }
                            break;

                        case 'exponenciacao':
                            $resultado = pow($numero1, $numero2);
                            break;

                        default:
                            $resultado = "Operação inválida.";
                            break;
                    }

                    echo "Resultado: " . $resultado;
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <?php include 'fotter.php';?>
</body>

</html>