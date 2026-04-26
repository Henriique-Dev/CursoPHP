<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 12</title>
    <link rel="stylesheet" href="../estilo/style.css">
</head>
<body>
    <?php 
        $precoProd = (float) ($_GET['preco'] ?? 0);
        $porcent = (float) ($_GET['porcent'] ?? 50);
        $valor = $precoProd * (1 + $porcent / 100);

        function moeda($valor) {
            return number_format($valor, 2 , ',', '.');
        };

    ?>
    <main>
        <h1>Reajustador de Preços</h1>
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
            <label for="preco">Preço do Produto (R$)</label>
            <input type="number" name="preco" id="preco">

            <label for="percent">Qual será o pecentual de reajuste? (<span id="valorPorc">50%</span>)</label>
            <input type="range" name="porcent" id="porcent" min="0" max="100" value="50" oninput="document.getElementById('valorPorc').innerText = this.value + '%'" step="1">

            <input type="submit" value="Reajustar">
        </form>
    </main>
    <section>
        <h2>Resultado do reajuste</h2>
        <p>O produto que custava R$<?= moeda($precoProd) ?>, com <strong><?= $porcent ?>% de aumento</strong> vai passar a custar <strong>R$<?= moeda($valor) ?></strong> a partir de agora.</p>
    </section>
</body>
</html>