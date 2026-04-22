<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 9</title>
    <link rel="stylesheet" href="../estilo/style.css">
</head>
<body>
    <?php 
        $nota1 = $_GET['nota1'] ?? 0;
        $peso1 = $_GET['peso1'] ?? 1;
        $nota2 = $_GET['nota2'] ?? 0;
        $peso2 = $_GET['peso2'] ?? 1;

        function mediaAritSimp($nota1, $nota2){
            $media = ($nota1 + $nota2) / 2;
            return $media;
        };

        function mediaAritPond($nota1, $peso1, $nota2, $peso2){
            $somaPond = $nota1 * $peso1 + $nota2 * $peso2;
            $somaPesos = $peso1 + $peso2;

            $res = $somaPond / $somaPesos;
            
            return $res;
        };

        function moeda($valor){
            return number_format($valor,2, ',', '.');
        };
    ?>
    <main>
        <h1>Médias Aritméticas</h1>

        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
            <label for="nota1">1º Valor</label>
            <input type="number" name="nota1" id="nota1" value="<?= $nota1 ?>">
            <label for="peso1">1º Peso</label>
            <input type="number" name="peso1" id="peso1" value="<?= $peso1 ?>">

            <label for="nota2">2º Valor</label>
            <input type="number" name="nota2" id="nota2" value="<?= $nota2 ?>">
            <label for="peso2">2º Peso</label>
            <input type="number" name="peso2" id="peso2" value="<?= $peso2 ?>">

            <input type="submit" value="Calcular Médias">

        </form>
    </main>

    <section>
        <h2>Cálculo das Médias</h2>
        <p>Analisando os valores <?= $nota1 ?> e <?= $nota2 ?>:</p>
        <ul>
            <li>A <strong>Média Aritmética Simples</strong> entre os valores é igual a <?= moeda(mediaAritSimp($nota1, $nota2)) ?>.</li>
            <li>A <strong>Média Aritmética Ponderada</strong> com pesos <?= $peso1 ?> e <?= $peso2 ?> é igual a <?= moeda(mediaAritPond($nota1, $peso1, $nota2, $peso2)) ?>.</li>
        </ul>
    </section>

</body>
</html>