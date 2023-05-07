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