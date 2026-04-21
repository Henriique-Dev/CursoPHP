<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 13</title>
    <link rel="stylesheet" href="../estilo/style.css">

    <style>
        .cedulas {
            width: 124px;
        }
    </style>
</head>
<body>
    <?php 
        $valor = $_GET['saque'] ?? 0;
        $valorOriginal = $valor;
        
        $notas = [100, 50, 10, 5];
        $resultado = [];

        foreach($notas as $nota) {
            $quantidade = intdiv($valor, $nota);

            if($quantidade > 0) {
                $resultado[$nota] = $quantidade;
                $valor %= $nota;
            }else {
                $resultado[$nota] = 0;
            }
            
        }
        
        
        
    ?>

    <main>
        <h1>Caixa Eletrônico</h1>
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
            <label for="saque">Qual valor você deseja sacar? (R$)</label>
            <input type="number" name="saque" id="saque" step="1">
            <small>*Notas disponíveis: R$100, R$50, R$10 e R$5</small>
            
            <input type="submit" value="Sacar">
        </form>
    </main>

    <section>
        <h2>Saque de R$<?= $valorOriginal?> realizado</h2>
        <p>O caixa eletrônico vai te entregar as seguintes notas:</p>
        <ul>
            <li><img src="./imagens/100-reais.jpg" alt="100 reais" class="cedulas"> x<?= $resultado[100] ?></li>
            <li><img src="./imagens/50-reais.jpg" alt="50 reais" class="cedulas"> x<?= $resultado[50] ?> </li>
            <li><img src="./imagens/10-reais.jpg" alt="10 reais" class="cedulas"> x<?= $resultado[10] ?> </li>
            <li><img src="./imagens/5-reais.jpg" alt="5 reais" class="cedulas"> x<?= $resultado[5] ?> </li>
        </ul>
    </section>
</body>
</html>