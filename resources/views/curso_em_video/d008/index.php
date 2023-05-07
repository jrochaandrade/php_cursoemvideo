<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
    </head>
    <body>
        <main>
            <?php
                $padrao = numfmt_create("pt-BR", NumberFormatter::CURRENCY); 
                $salario = $_GET['salario'] ?? 0;
                $min = 1000;
            ?>
            <h1>Informe seu salário</h1>
            <form action="calculo_salario" method="get">
                <label for="salario">Salário R$: </label>
                <input type="number" name="salario" id="" min="<?=$min?>" value="<?=$salario?>" step="0.01">                
                <p>Considerando que o salário mínimo é <strong><?=numfmt_format_currency($padrao, $min, "BRL")?></strong></p>
                <input type="submit" value="Calcular">
            </form>            
        </main>
        <section>
                <h2>Resultado final</h2>
                <?php                    
                   /*  $div = $salario / $min;
                    $xsalarios = (int) $div; */
                    $xsalarios = intdiv($salario, $min);
                    $resto = $salario % $min;
                    
                    /* $padrao = numfmt_create("pt-BR", NumberFormatter::CURRENCY); */
                    
                    echo "<p>Quem recebe um salário de " . numfmt_format_currency($padrao, $salario, "BRL") . " ganha " . $xsalarios . " salários minímos + " . numfmt_format_currency($padrao, $resto, "BRL") . "</p>";
                ?>
            </section>
    </body>
</html>