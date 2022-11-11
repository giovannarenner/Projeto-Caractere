<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css/style.css">
    <title>Caracteres</title>
</head>
<body>
    
    <div class="titulo">
        <h1 class="digite">Digite uma palavra: </h1>
    </div>
<form  method="POST">
   <div class="inputs">
            <p class="inputN">
           <input class="inputR" type="text" name="palavra" />
            </p>
            </div>
        <button class="res">Calcular</button> <br>
        
        <?php
      if(isset($_POST['palavra'])){
      $palavra = $_POST['palavra'];
      $tamanho = strlen($palavra);

        echo "<p style='margin-top: 15px; font-size: 35px; color: black;'>
        A palavra possui $tamanho caracteres</p>";
      }
            
         ?>
        </form>
       
</body>
</html>