<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilo.css">
    <title>Pagina</title>
</head>
<body>

    <div class="cabecalho">
        <img src="https://www.infoescola.com/wp-content/uploads/2013/08/sol.jpg">
        <h1>Jornal do Amanhã</h1>
    </div>
    <br>
    <br>
    <div id="m">
        <p><?php
    // Set the current working directory
    $directory = getcwd()."/noticias";
 
    // Returns array of files
    $files1 = scandir($directory);
 
    // Count number of files and store them to variable
    $num_files = count($files1) - 2;

    for($i = 0; $i < $num_files; $i++){
      $contador = 0;
      $link = "";
      $nome = "noticia" . $i . ".txt";

      $fs = fopen("noticias/$nome","r") or die("Unable to open file!"); // abre o aquivo no modo leitura
      echo "<div class='noticia'>";
      echo "<br>";
      while (!feof($fs)){
        if($contador == 0){
            $link = fgets($fs,500);
            $linha = fgets($fs,500);
            $imagem = fgets($fs,500);
            echo "<a href='$link'> <img class='demo' src='$imagem'></a>";
            echo "<a class='titulo' href='$link'><b>$linha</b></a>";
            echo "<br> <br>";
        }
          $linha = fgets($fs,500);
          echo "<p>";
          echo $linha;
          echo "</p>";
          $contador = $contador + 1;
        }
      echo "<br>";
      echo "</div>";
      fclose($fs); //fechar arquivo
      echo "<br>";
    } 
    ?></p>
    </div>
    
</body>
</html>