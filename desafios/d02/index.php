<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafios</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <section>
        <h1>Trabalhando com números aleatórios</h1>
        <?php 
            $nmr = rand(0, 100);

            echo "Gerando um número aleatório entre 0 e 100...<br>";
            echo "O valor gerado foi <strong>$nmr</strong>";
        
        ?>
        <br> <br>
        <button onclick="location.reload();">Gerar outro</button>
    </section>
</body>
</html>