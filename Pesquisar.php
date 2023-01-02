
<!--OCULTAR ERROS-->
<?php
ini_set('display_errors', 0 );
error_reporting(0);
?> 


<?php
//PEGANDO IMAGEM DO POSTER
$url = "https://api.themoviedb.org/3/configuration?api_key=d0c24266ec2ff53c34cff3cdf84890be&language=pt-BR";
$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");
$imagens = json_decode(curl_exec($ch));
?>
<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> Pesquisar</title>
    <link rel="shortcut icon" href="img/favicon.ico" />
    <link rel="stylesheet" type="text/css" href="style.css">
    <script type="text/javascript" src="js.js"></script>
</head>
<body>



       <!-- INICIO DO SITE -->
      <div class="body-main">
       <div class="body-header">


                     <!--MENU E PESQUISAR-->

         <!--HOME-->

         <div id="menu">
            <table>
                <tr id="menu">
                <td id="menu"><a id="menu" href="index.php"><img id="logo" src="img/logoH.png" widht="56" height="47"/></a></td>
                   <td id="menu"><a id="menu" href="index.php">HOME</a> 
                   <td id="menu"><a id="menu" href="lancamentos.php">LANÇAMENTOS</a></td>       
                   <td id="menu"><a id="menu" href="bancodedados.html">FILMES</a></td>
                   <td id="menu"><a id="menu" href="logicadeprogramacao.html">SERIES</a></td>
                   <td id="menu"><a id="menu" href="faleconosco.html">CONTATO</a></td>  
                   <td><form method="POST" action="pesquisar.php">
                  <input type="text" name="pesquisar" placeholder="PESQUISAR">
	                 <input type="submit" id="Buscar" value="Buscar">
                    </form> </td>  
                   
                </tr>
            </table>
          </div>
        <!--ORGANIZAR URL de PESQUISA-->
<?php
$url1 = "https://api.themoviedb.org/3/search/movie?api_key=d0c24266ec2ff53c34cff3cdf84890be&language=pt-BR&query=";
$url2 = $_POST["pesquisar"];
$url3 = "&include_adult=false";

    /*mixed str_replace (mixed procura, mixed substituo, mixed contexto)*/
    $texto = $url2;
    $novo_texto = str_replace(" ", "+", $texto);
    $full = $url1 . $novo_texto .$url3;
    //var_dump($full);

?>

<?php
//PEGANDO INFORMAÇÕES: NOME DO FILME, SINOPSE, AVALIAÇÃO
$url = $full;
$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");
$filme = json_decode(curl_exec($ch));
//var_dump($full);
?>




        <div class="welcome">   
          <h1>O que vamos assistir?</h1>
          <h2>Assista qualquer coisa, de qualquer lugar, a qualquer hora.</h2>
          <div class="hypertube-buttons">
            <div class="browse" id="to_browse">
              Navegar
            </div>
            <div class="my-list">
              Minha Lista
            </div>
          </div>
        </div>
      </div>
      
      <!--FIM HOME-->

      <div class="change-view">
        <i class="fas fa-sliders-h"></i>
      </div> 
      <div class="movie-gallery">     
        <div class="movie-container">

            <!--IMAGENS-->
              <?php
                   foreach ($imagens -> images as $urll) {       
              ?>   

             <!--FILMES-->
              <?php
                    foreach ($filme-> results as $nomef) {     
              ?>  

             <!--ORGANIZADOR DE URL DOS FILMES-->
              <?php   
             $itens1 = $urll -> base_url;
             $itens2 = $urll -> poster_sizes;
             $itens3 = $nomef-> poster_path;
             $full = $urll ."w500" .$nomef-> poster_path;    
              ?>
              

        <div class="one-movie">
          <div class="preview">
          
            <a href="movie.php?tmpString=<?=$nomef->id?>"><img src="<?=$full?>"/></a>
            <h2><?=$nomef->title?></h2>
            <i class="fas fa-eye"></i>
            <div class="rating"><?=$nomef->vote_average?></div>
          </div>
          
          <div class="description-container">
            <div class="description-body">
             <div class="description-img">
               <img src="<?=$full?>"/>
             </div>
              <div class="description-text">
               <h1><?=$nomef->title?></h1>
               <p><?=$nomef->overview?></p> 
                 <div class="hypertube-buttons">
                  <div class="browse">
                   <i class="fas fa-play"></i> Play
                  </div>
                  
                  <div class="my-list">
                    <i class="fas fa-plus"></i> Minha Lista
                  </div>
                  
                </div>
                <div class='info'>
                  <h4>Starring: </h4>
                  <h5>Matthew Broderick, Jeremy Irons, James Earl Jones </h5>
                </div>
                <div class='info'>
                  <h4>Genero:</h4>
                  <h5><?=$nomef->genres?></h5>
                </div>
                
             </div>
            </div>
          </div>
        </div>
              <?php  }?>

             <!--FIM IMAGENS-->
               <?php break;} ?>
                
          
    
          
        </div>
      </div>
    </div>

    </body>
</html>