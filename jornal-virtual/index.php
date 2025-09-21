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
        <h1>Isto é um cabeçalho</h1>
    </div>

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
      while (!feof($fs)){
        if($contador == 0){
            $link = fgets($fs,500);
            $linha = fgets($fs,500);
            $imagem = fgets($fs,500);
            echo "<a class='titulo' href='$link'>$linha</a>";
            echo "<img class='demo' src='$imagem'>";
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
    } 
    ?></p>
    </div>
    
</body>
</html>