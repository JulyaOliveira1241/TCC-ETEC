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
    <title> Home - Boracha</title>
    <link rel="shortcut icon" href="img/favicon.ico" />
    <link rel="stylesheet" type="text/css" href="style.css">
    <script type="text/javascript" src="js.js"></script>
</head>
<body>

<ul class='slideshow'>
  <li>
    <!-- By Keven Law from Los Angeles, USA (Long Hot Summer......) [CC-BY-SA-2.0 (http://creativecommons.org/licenses/by-sa/2.0)], via Wikimedia Commons, http://commons.wikimedia.org/wiki/File%3AFlickr_-_law_keven_-_Long_Hot_Summer.......jpg -->
    <span>Summer</span>
  </li>
  <li>
    <!-- By http://www.ForestWander.com [CC-BY-SA-3.0-us (http://creativecommons.org/licenses/by-sa/3.0/us/deed.en)], via Wikimedia Commons, http://commons.wikimedia.org/wiki/File%3ARed-fall-tree-lake_-_West_Virginia_-_ForestWander.png -->
    <span>Fall</span>
  </li>
  <li>
    <!-- By Valerii Tkachenko [CC-BY-2.0 (http://creativecommons.org/licenses/by/2.0)], via Wikimedia Commons, http://commons.wikimedia.org/wiki/File%3AWinter_wonderland_Austria_mountain_landscape_(8290712092).jpg -->
    <span>Winter</span>
  </li>
  <li>
    <!-- By Arman7 (Own work) [CC-BY-SA-3.0 (http://creativecommons.org/licenses/by-sa/3.0) or GFDL (http://www.gnu.org/copyleft/fdl.html)], via Wikimedia Commons, http://commons.wikimedia.org/wiki/File%3ABoroujerd_spring.jpg -->
    <span>Spring</span>
    <li>
    <!-- By Arman7 (Own work) [CC-BY-SA-3.0 (http://creativecommons.org/licenses/by-sa/3.0) or GFDL (http://www.gnu.org/copyleft/fdl.html)], via Wikimedia Commons, http://commons.wikimedia.org/wiki/File%3ABoroujerd_spring.jpg -->
    <span>Spri</span>
  </li>
  </li>
</ul>
       <!-- INICIO DO SITE -->
      <div class="body-main">
       <div class="body-header">


                     <!--MENU E PESQUISAR-->

         <!--HOME-->
         <section class="home">
    <header>

      <div class="logo">
      <a href="index.php"> <img src="https://boracha.000webhostapp.com/img/logoH.png" alt="Boracha logo">
      </div>

      <nav class="menu">
        <ul>
        <li><a href="index.php">HOME</a></li>
          <li><a href="lancamentos.php">LANÇAMENTOS</a>
               <ul>
                 <li><a href="filmes.php">Filmes</a></li>
                 <li><a href="series.php">Series</a></li>
               </ul>
        </li>
          <li><a href="emalta.php">EM ALTA</a></li>
        </ul>
      </nav>
      
    </header>

    


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

<?php
$url11 = "https://api.themoviedb.org/3/search/tv?api_key=d0c24266ec2ff53c34cff3cdf84890be&language=pt-BR&query=";
$url2 = $_POST["pesquisar"];
$url3 = "&include_adult=false";
    /*mixed str_replace (mixed procura, mixed substituo, mixed contexto)*/
    $texto = $url2;
    $novo_texto = str_replace(" ", "+", $texto);
    $full10 = $url11 . $novo_texto .$url3;
    //var_dump($full10);
?>

<?php
//PEGANDO INFORMAÇÕES: NOME DA SERIE, SINOPSE, AVALIAÇÃO
$url = $full10;
$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");
$series = json_decode(curl_exec($ch));
//var_dump($full);
?>
 

<div class="search">   
          <h1><form method="POST" action="index.php">
              <input type="text" id="search" name="pesquisar" list="nomeconteudo" placeholder="O que vamos procurar?">
	            <input type="submit" id="buscar" value="Buscar">
              <datalist id = "nomeconteudo">
                        <option value="<?=$nomef->title?>"></option>
                        <option value="<?=$nomef->title?>"></option>
                        <option value="<?=$nomef->title?>"></option>
              </datalist>


              </form>
          </h1>
        </div>
      </div>
              
<style>
              .slideshow li:nth-child(1) span {
    background-image: url(https://image.tmdb.org/t/p/original/JB17sIsU53NuWVUecOwrCA0CUp.jpg);
  }
  
  .slideshow li:nth-child(2) span {
    background-image: url(https://image.tmdb.org/t/p/original/pcDc2WJAYGJTTvRSEIpRZwM3Ola.jpg);
    -webkit-animation-delay: 6s;
    -moz-animation-delay: 6s;
    animation-delay: 6s;
  }
  
  .slideshow li:nth-child(3) span {
    background-image: url(https://image.tmdb.org/t/p/original/7RyHsO4yDXtBv1zUU3mTpHeQ0d5.jpg);
    -webkit-animation-delay: 12s;
    -moz-animation-delay: 12s;
    animation-delay: 12s;
  }
  
  .slideshow li:nth-child(4) span {
    background-image: url(https://image.tmdb.org/t/p/original/suopoADq0k8YZr4dQXcU6pToj6s.jpg);
    -webkit-animation-delay: 18s;
    -moz-animation-delay: 18s;
    animation-delay: 18s;
  }
  .slideshow li:nth-child(5) span {
    background-image: url(https://image.tmdb.org/t/p/original/AmHOQ7rpHwiaUMRjKXztnauSJb7.jpg);
    -webkit-animation-delay: 24s;
    -moz-animation-delay: 24s;
    animation-delay: 24s;
  }
  .slideshow li:nth-child(6) span {
    background-image: url(https://image.tmdb.org/t/p/original/JB17sIsU53NuWVUecOwrCA0CUp.jpg);
    -webkit-animation-delay: 30s;
    -moz-animation-delay: 30s;
    animation-delay: 30s;
  }
  .menu ul{
    margin: 0;
    list-style: none;
    font-family: 'Open Sans' , sans-serif
  }
  .menu ul li{
       display: inline;
       position: relative;
  }
  .menu ul li a {
      padding: 36px 15px;
      display: inline-block;
      color: white;
      text-decoration: none;
      transition: background .6s;
  }
  .menu ul li a:hover{
      background-color: #8B0000;

    
  }
  .menu ul ul {
    display: none;
    left: 0;
    position: absolute;
  }
  .menu ul li:hover ul {
    display: block;
  }
  .menu ul ul {
    width: 150px;
  }
  .menu ul ul li a{
    display: block;
   
  }

</style>
            
      <!--FIM HOME-->

      <!--INICIO GALERIA DE FILMES E SERIES-->
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
          
            <a href="resultado.php?tmpString=<?=$nomef->id?>"><img src="<?=$full?>"/></a>
            <h2><?=$nomef->title?></h2>
            <i class="fas fa-eye"></i>
            <div class="rating"><?=$nomef->vote_average?></div>
          </div>
          
          <div class="description-container">
            <div class="description-body">
             <div class="description-img">
               <img src="<?=$full?>"/>
             </div>
            
                
             
            </div>
          </div>
        </div>
              <?php  }?>

             
             <!--SERIES-->
              <?php
                    foreach ($series-> results as $nomes) {     
              ?>  

             <!--ORGANIZADOR DE URL DAS SERIES-->
              <?php   
             $itens1 = $urll -> base_url;
             $itens2 = $urll -> poster_sizes;
             $itens3 = $nomef-> poster_path;
             $full2 = $urll ."w500" .$nomes-> poster_path;    
              ?>
                       
          <div class="one-movie">
          <div class="preview">
          
            <a href="resultado2.php?tmpString=<?=$nomes->id?>"><img src="<?=$full2?>"/></a>
            <h2><?=$nomes->name?></h2>
            <i class="fas fa-eye"></i>
            <div class="rating"><?=$nomes->vote_average?></div>
          </div>
          
          <div class="description-container">
            <div class="description-body">
             <div class="description-img">
               <img src="<?=$full2?>"/>
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