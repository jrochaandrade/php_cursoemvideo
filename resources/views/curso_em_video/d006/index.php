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
            <h1>Formulário retro-alimentado</h1>
            
        </header>
        <?php 
            $num1 = $_GET['valor1'] ?? 0 ;
            $num2 = $_GET['valor2'] ?? 0 ;
        ?>        
        <main>            
            <form action="formulario" method="get">
                <label for="valor1">Digite o primeiro numero: </label>
                <input type="number" name="valor1" id="" value="<?=$num1?>">
                <label for="valor2">Digite o segundo numero: </label>
                <input type="number" name="valor2" id="" value="<?=$num2?>">
                <input type="submit" value="Somar">
            </form>
        </main>
        <section>
            <h2>Resultado da soma</h2>
            
            <PRE>
                <?php
                    echo "<p>A soma do numero " . $num1 . " com o numero " . $num2 . " é <strong>" . $num1 + $num2 . "</strong></p>";                    
                ?>
            </PRE>
        </section>
    </body>
</html>