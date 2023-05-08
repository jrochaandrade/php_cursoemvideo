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
            <h1>Conversor de moedas</h1>
        </header>
        <section>
            <h2>Quanto você tem na carteira?</h2>
            <form action="conversor" method="get">
                <label for="valor" >Digite o valor:</label>
                <input type="number" name="valor" value="" step="0.01">
                <input type="submit" name="" value="Converter">
                <div class="d-grid gap-2">                    
                    <a class="btn btn-primary " href="\" role="button">Voltar para página inicial</a>                    
                </div>
            </form>
            
        </section>
    </body>
</html>