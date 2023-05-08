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
        <header>
            <h1>Anatomia de uma divisão</h1>
        </header>
        <?php 
            $div = $_GET['dividendo'] ?? 0;
            $divis = $_GET['divisor']?? 1;
        ?>
        <main>
            <form action="anatomia" method="get">
            <label for="dividendo">Dividendo</label>
            <input type="number" name="dividendo" id="iddividendo" min="0" value="<?=$div?>">
            <label for="divisor">Divisor</label>
            <input type="number" name="divisor" id="iddivisor" min="1" value="<?=$divis?>">
            <input type="submit" value="Analisar">
            <div class="d-grid gap-2">                    
                    <a class="btn btn-primary " href="\" role="button">Voltar para página inicial</a>                    
                </div>
            </form>
        </main>
        <section>
            <h2>Extrutura de divisão</h2>
            <?php
                $rest = $div % $divis;
                $quociente = intdiv($div, $divis);
            ?>
            <table class="divisao">
                <tr>
                    <td><?=$div?></td>
                    <td><?=$divis?></td>
                </tr>
                <tr>
                    <td><?=$rest?></td>
                    <td><?=$quociente?></td>
                </tr>
            </table>
        </section>
    </body>
</html>