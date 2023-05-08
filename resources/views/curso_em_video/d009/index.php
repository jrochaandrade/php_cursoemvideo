<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    </head>
    <body>
        <main>
            <?php 
                $anoatual = date('Y');
                $anonasc = $_GET['ano'] ?? 2000;
                $anocomparacao = $_GET['anocomp'] ?? $anoatual;
            ?>
            <h1>Calculando a sua idade</h1>
            <form action="nascimento" method="get">
                <label for="ano">Em que ano você nasceu?: </label>
                <input type="number" name="ano" id="" value="<?=$anonasc?>" min="1900" max="<?=$anoatual -1?>">
                <label for="anocomp">Quer saber sua idade em qual ano? (atualmente estamos em <strong><?=$anoatual?></strong>)</label>
                <input type="number" name="anocomp" id="" value="<?=$anocomparacao?>" >
                <input type="submit" value="Qual sera minha idade?">
                <div class="d-grid gap-2">                    
                    <a class="btn btn-primary " href="\" role="button">Voltar para página inicial</a>                    
                </div>
            </form>
        </main>
        <section>
            <h2>Resultado</h2>
            <?php
                $idade = $anocomparacao - $anonasc;
                if($idade == 1){ 
                    echo "Quem nasceu em " . $anonasc . " vai ter <strong>" . $idade . " ano</strong> em " . $anocomparacao. "!";
                }
                elseif($idade < 0){
                    echo "No ano de " . $anocomparacao . " você não era nascido.";
                }
                else{
                    echo "Quem nasceu em " . $anonasc . " vai ter <strong>" . $idade . " anos</strong> em " . $anocomparacao. "!";
                }
            ?>
        </section>
    </body>
</html>