<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 8</title>
    <link rel="stylesheet" href="../estilo/style.css">
</head>
<body>
    <?php 
        function moeda($valor) {
            return number_format($valor,3, ',', '.');
        };
        $numero = $_GET['num'] ?? 0;

        $quadrada = sqrt($numero);
        $cubica = pow($numero, 1/3);
        // $cubica = $numero ** (1/3));
    
    ?>
    <main>
        <h1>Informe um número</h1>
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
            <label for="num">Número:</label> 
            <input type="number" name="num" id="num" value="<?= $numero ?>">
            <input type="submit" value="Calcular Raízes">
        </form>
    </main>

    <section>
        <h2>Resultado Final</h2>
        <p>Analisando o  <strong>número <?= $numero ?></strong>, temos: </p>
            <ul>
                <li>A sua raiz quadrada é <strong><?= moeda($quadrada) ?></strong>.</li>
                <li>A sua raiz cúbica é <strong><?= moeda($cubica) ?></strong>.</li>
            </ul>
    </section>
</body>
</html>