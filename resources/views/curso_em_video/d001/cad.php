<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
    </head>
    <body>
        <header>
            <h1>Resultado do processamento.</h1>
        </header>
        <main>
            <?php 
                $nome = $_GET["nome"] ?? "Sem nome";
                $sobrenome = $_GET["sobrenome"] ?? "desconhecido";
                echo "É um prazer te conhecer $nome $sobrenome! Este é o meu site!";
            ?>
            <p><a href="curso">Voltar para página anterior.</a></p>
        </main>
    </body>
</html>