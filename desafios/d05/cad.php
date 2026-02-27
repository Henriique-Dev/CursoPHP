<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resposta</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <section>
        <h1>Analisador de Números Real</h1>
        <?php 
            $nmr = $_GET["valor"];
            $parteInt = floor($nmr);
            $parteFrac = $nmr - $parteInt;
            $nmr = number_format($nmr, 3, ",", ".");

            echo <<<EOT
            Analisando o número <strong>$nmr</strong> informado pelo usuário:
             <ul>
                <li>A parte inteira do número informado é <strong>$parteInt</strong></li>
                <li>A parte fracionária do número é <strong>$parteFrac</strong></li>
            </ul>
            EOT;

        ?>
        
    </section>
</body>
</html>