<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title></title>
</head>
<body>
    <header>
        <h1>Resultado</h1>
    </header>
    <main>
        <?php 
            $num1 = $_GET['numero'];
            if ($num1 == ""){
                echo "Favor digitar um numero!<br>";
            }else{
            echo "O numero escolhido foi $num1 <br>";
            $antecessor = $num1 - 1;
            $sucessor = $num1 + 1;
            echo "O seu antecessor é $antecessor <br>";
            echo "O seu sucessor é $sucessor<br>";
            }            
        ?>        
        <!-- <a href="numero" type="button" class="mt-2 mb-4 btn btn-secondary">Voltar</a> -->
        <button type="" onclick="javascript:window.location.href='numero'" class="mt-2 mb-2">&#x2B05;Voltar</button> 
    </main>
</body>
</html>