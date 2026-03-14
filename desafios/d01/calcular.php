<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <main>
        <h1>Resultado Final</h1>
        <?php 
            $num = $_GET["nmr"];
            $ant = $num - 1;
            $suc = $num + 1;
            
            echo "O número escolhido é <strong>$num</strong><br>";
            echo "O seu <em>antecessor</em> é $ant<br>";
            echo "O seu <em>sucessor</em> é $suc<br>";

        ?>
        <br>
        <button onclick="javascript:window.location.href='index.html'">&#x2b05;Voltar</button>
    </main>
</body>
</html>