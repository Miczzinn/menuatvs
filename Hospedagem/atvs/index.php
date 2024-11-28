<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Menu de Navegação</title>
</head>

<body>
    <header>
        <h1>Menu de Navegação</h1>
    </header>

    <main class="container my-4">
        <div class="listas row justify-content-center">
            <div class="col-md-3 list-group mb-4">
                <h4 class="text-center mb-3">Lista 1</h4>
                <a href="nasc.php" class="list-group-item list-group-item-action">Idade</a>
                <a href="conversor.php/" class="list-group-item list-group-item-action">Conversor</a>
                <a href="imc.php" class="list-group-item list-group-item-action">IMC</a>
                <a href="janta.php" class="list-group-item list-group-item-action">Desconto</a>
                <a href="temp.php/" class="list-group-item list-group-item-action">Temperatura</a>
            </div>
            <div class="col-md-3 list-group mb-4">
                <h4 class="text-center mb-3">Lista 2</h4>
                <a href="mais18ounão.php" class="list-group-item list-group-item-action">+18?</a>
                <a href="media.php" class="list-group-item list-group-item-action">Média</a>
                <a href="imc2.php" class="list-group-item list-group-item-action">IMC2</a>
                <a href="desconto2.php" class="list-group-item list-group-item-action">desconto2</a>
                <a href="imparpar.php" class="list-group-item list-group-item-action">Impar ou par?</a>

            </div>
            <div class="col-md-3 list-group mb-4">
                <h4 class="text-center mb-3">Lista 3</h4>
                <a href="calculadora.php" class="list-group-item list-group-item-action">Calculadora</a>
                <a href="calculator.php" class="list-group-item list-group-item-action">Calculadora2</a>
                <a href="tabuada.php" class="list-group-item list-group-item-action">Tabuada</a>
                <a href="fibonaci.php" class="list-group-item list-group-item-action">Fibonacci</a>
                <a href="mostrarnumeros.php" class="list-group-item list-group-item-action">Mostrar números</a>
                <a href="somapar.php" class="list-group-item list-group-item-action">Soma de pares</a>
            </div>
            <div class="col-md-3 list-group mb-4">
                <h4 class="text-center mb-3">Lista 4</h4>
                <a href="heprimo.php" class="list-group-item list-group-item-action">Primo ou não?</a>
                <a href="media2.php" class="list-group-item list-group-item-action">Média 2</a>
                <a href="muliplicacao.php" class="list-group-item list-group-item-action">Multiplicação</a>
                <a href="ºC-ºF.php" class="list-group-item list-group-item-action">Temperatura 2</a>
                <a href="soma.php" class="list-group-item list-group-item-action">Soma</a>
               
            </div>
        </div>
    </main>
    
    <?php
    include('fotter.php');
    ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN6jIeHz" crossorigin="anonymous"></script>
</body>

</html>