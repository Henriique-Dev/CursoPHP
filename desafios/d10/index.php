<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 10</title>
    <link rel="stylesheet" href="../estilo/style.css">
</head>
<body>
    <?php 
        $atual = date("Y");
        $anoNasc = $_GET['nasc'] ?? 2000;
        $anoAtual = $_GET['atual'] ?? $atual;

        function idade ($anoNasc, $anoAtual){
    
            return $idade =  $anoNasc - $anoAtual;

        };

    ?>
    <main>
        <h1>Calculando a sua idade</h1>
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
            <label for="anoNasc">Em que ano você nasceu?</label>
            <input type="number" name="nasc" id="nasc" value="<?= $anoNasc ?>" required min="1900" max="<?= $atual ?>">

            <label for="anoAtual">Quer saber sua idade em que ano?(Atualmente estamos em <strong><?= $atual ?></strong>)</label>
            <input type="number" name="atual" id="atual" value="<?= $anoAtual ?>" required min="1900">

            <input type="submit" value="Qual será minha idade?">
        </form>
    </main>
    <section>
        <h2>Resultado</h2>
        <p>Quem nasceu em <?= $anoNasc ?> vai ter <strong><?= idade($anoAtual, $anoNasc) ?> anos</strong> em <?= $anoAtual ?>!</p>
    </section>
</body>
</html>