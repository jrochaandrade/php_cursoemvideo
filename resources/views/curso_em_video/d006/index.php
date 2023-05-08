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
                <div class="d-grid gap-2">                    
                    <a class="btn btn-primary " href="\" role="button">Voltar para página inicial</a>                    
                </div>
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