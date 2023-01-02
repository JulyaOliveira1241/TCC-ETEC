<!--OCULTAR ERROS-->
<?php
ini_set('display_errors', 0 );
error_reporting(0);
?> 


<!--PEGANDO ID DO PESQUISAR-->
<?php
if (isset($_GET['tmpString'])){
    $tmpString = $_GET['tmpString'];

    /*mixed str_replace (mixed procura, mixed substituo, mixed contexto)*/
    $texto = $tmpString;
    $novo_texto = str_replace(" ", "+", $texto);
    //var_dump($novo_texto);
  }
else{
    $tmpString = null;
}
?>

<!--MONTANDO URL DA API BASEADO NO ID DA PESQUISA NOME FILME-->
<?php   
$urlapi = "https://api.themoviedb.org/3/movie/";
$idfilme = $novo_texto;
$finalurl = "?api_key=d0c24266ec2ff53c34cff3cdf84890be&language=pt-BR&append_to_response=genre,watch/providers";
$totalurl = $urlapi . $idfilme . $finalurl; 
?>

<!--PEGANDO INFORMAÇÕES: NOME DO FILME, SINOPSE, AVALIAÇÃO-->
<?php
//var_dump($totalurl);~
$url = $totalurl;
$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");
$filme = json_decode(curl_exec($ch)); 
?>

<!--MONTANDO URL DA API BASEADO NO ID DA PESQUISA TRAILERS   "/videos?api_key=d0c24266ec2ff53c34cff3cdf84890be&language=en-US&append_to_response=videos,watch/providers"-->
<?php   
$urlapi = "https://api.themoviedb.org/3/movie/";
$idfilme = $novo_texto;
$finalurl2 = "/videos?api_key=d0c24266ec2ff53c34cff3cdf84890be&language=pt";
$totalurl2 = $urlapi . $idfilme . $finalurl2; 
?>

<!--PEGANDO INFORMAÇÕES: VIDEOS TRAILERS-->
<?php
$url = "$totalurl2";
$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");
$videos = json_decode(curl_exec($ch)); 
?>

<!--MONTANDO URL DA API BASEADO NO ID DA PESQUISA STREAMING-->
<?php   
$urlapi = "https://api.themoviedb.org/3/movie/";
$idfilme = $novo_texto;
$finalurl3 = "/watch/providers?api_key=d0c24266ec2ff53c34cff3cdf84890be&translate=false&locale=BR";
$totalurl3 = $urlapi . $idfilme . $finalurl3; 
?>

<!--PEGANDO INFORMAÇÕES: PROVEDOR DE STREAMING-->
<?php
$url = "$totalurl3";
$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");
$streaming = json_decode(curl_exec($ch)); 
?>

<!--MONTANDO URL DA API BASEADO NO ID DA PESQUISA RECOMENDAÇÃO-->
<?php   
$urlapi = "https://api.themoviedb.org/3/movie/";
$idfilme = $novo_texto;
$finalurl4 = "/watch/providers?api_key=d0c24266ec2ff53c34cff3cdf84890be&language=pt-BR";
$totalurl4 = $urlapi . $idfilme . $finalurl3; 
?>

<!--PEGANDO INFORMAÇÕES: PROVEDOR DE STREAMING-->
<?php
$url = "$totalurl4";
$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");
$streaming = json_decode(curl_exec($ch)); 
?>

            <!--COLOCANDO O NOME DO FILME NO TITULO DA PAGINA-->
            <?php
            foreach ((array)$filme-> title as $titulo) {             
            ?>  

<html lang="pt-br">
<meta charset='UTF-8' />
<meta name='viewport' content='width=device-width, initial-scale=1.0, maximum-scale=1.0' />

<head>
  <title><?=$titulo?></title>
  <link rel="shortcut icon" href="img/favicon.ico" />
  <link rel="stylesheet" type="text/css" href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <link rel="stylesheet" type="text/css" href="estilo.css">
  <link href="https://fonts.googleapis.com/css?family=Quicksand:300,400,700" rel="stylesheet">

  <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900" rel="stylesheet">
  <meta charset='UTF-8' />
</head>

<body>
<?php break;} ?>
              <!--IMAGENS-->
              <?php
              foreach ((array)$filme-> backdrop_path  as $backgroundfilm){
              ?>
         

              <!--FILMES-->
              <?php 
              foreach ((array)$filme-> title as $titulo) {       
                foreach ((array)$filme-> overview as $sinopse){
                  foreach ((array)$videos-> results as $urltrailer){
                  foreach ((array)$filme-> original_language  as $idiomaOriginal){ 
                    
                        
                        
                      
                      //ORGANIZADOR DE URL DOS TRAILERS DOS FILMES
                      $linkvideo = $urltrailer-> key;   
                      $linktrailer = "https://www.youtube.com/watch?v=" . $linkvideo;             
               

              break;

              //TODAS AS CHAVES DE FECHAMENTO DO FOREACH(TOMAR CUIDADO)
              }}
             ?>

             <?php 
            $imageurl = "http://image.tmdb.org/t/p/";      
            $linkbanner = $imageurl ."original" . $backgroundfilm;
            ?>


              <style>
              .home {
              display: flex;
              flex-direction: column;
              background-size: cover;
              height: 100vh;
              width: auto;
              background-image: linear-gradient(
              rgba(43, 41, 40, 0.418),
              rgba(0, 0, 0, 0.767)
               ),
               url("<?= $linkbanner?>");
              background-attachment: fixed;
  
}
</style>
  <section class="home">
    <header>

      <div class="logo">
      <a href="index.php"> <img src="https://boracha.000webhostapp.com/img/logoH.png" alt="Boracha logo">
      </div>

      <nav class="main-nav">
        <ul>
          <li><a href="index.php">HOME</a></li>
          <li><a href="#">LANÇAMENTOS</a></li>
          <li><a href="#">EM ALTA</a></li>
        </ul>
      </nav>

  
    </header>

    <div class="movie-details">
      <h1><?= $titulo ?></h1>
      <div id="genero">
      <?php 
            foreach ((array)$filme-> genres as $generoname){
            ?>
            
            <?=$generoname->name?> 
            
      <?php } ?>
      </div>
      <label class="sinopse"> <?=$sinopse?>  </label>
      <a href="<?=$linktrailer?>" target="_blank">Assistir Trailer <i class="ion-play"></i></a></button>
      <?php } ?>
      <?php } ?>
      
 
                    
                    <?php
                    foreach ((array)$streaming-> results as $provedor) {
                    foreach ((array)$provedor-> flatrate as $stream) {
                      
                       

                    $plataforma = $stream -> provider_name;
                    $logoUrl = $stream -> logo_path;
                   // var_dump($plataforma);

                    $imageurl = "http://image.tmdb.org/t/p/";      
                    $logoStreaming = $imageurl ."original" . $logoUrl;  
                    ?>
                    <?php }?>
                    <?php }?>
                   
                  <p id="providers">Assista:</p>
                   
                        <p href=""id="providers"><img id="providers"src="<?=$logoStreaming?>"/></p> </h5>
                            
    </div>

  </section>
  
<?php }?>

  <section class="movie-list">
    <div class="movie-nav">
      <ul>
        <li>Em Cartaz</li>
        <li>Em breve</li>
        <li>Populares</li>
        <li>Séries</li>
        <li>Trailer</li>
        <li class="drop">Mais
          <i class="ion-ios-arrow-down"></i>
          <div class="dropdown">
            <a href="#">Link 1</a>
            <a href="#">Link 2</a>
            <a href="#">Link 3</a>
          </div>
        </li>
        <li><i class="ion-android-star"></i> 179</li>
      </ul>

      <div class="sort-show">
        <i class="ion-navicon-round"></i>
        <i class="ion-grid"></i>
        <p>TMDb Rating</p>
        <i class="ion-ios-search"></i>
      </div>
    </div>

    <div class="browse-movies">

      <div class="box">

        <img src="http://www.goldenglobes.com/sites/default/files/films/the-shawshank-redemption.jpg" alt="The Shawshank Redemption" />

        <h3>The Shawshank Red...</h3>
        <h6>Drama film Thriller</h6>
        <div class=rating>
          <i class="ion-ios-heart"></i>
          <h4>9.2</h4>
        </div>
        <p>+</p>

      </div>

      <div class="box">

        <img src="https://lewislitjournal.files.wordpress.com/2017/02/the-godfather.jpeg" />

        <h3>The Godfather</h3>
        <h6>Drama film Crime</h6>
        <div class=rating>
          <i class="ion-ios-heart"></i>
          <h4>9.2</h4>
        </div>
        <p>+</p>

      </div>

      <div class="box">

        <img src="https://images-na.ssl-images-amazon.com/images/I/914HFOPuVwL.jpg" />

        <h3>Schindler's List</h3>
        <h6>Drama Biography History</h6>
        <div class=rating>
          <i class="ion-ios-heart"></i>
          <h4>8.9</h4>
        </div>
        <p>+</p>

      </div>

      <div class="box">

        <img src="https://usercontent1.hubstatic.com/13015782_f1024.jpg" />

        <h3>12 Angry Men</h3>
        <h6>Drama Crime</h6>
        <div class=rating>
          <i class="ion-ios-heart"></i>
          <h4>8.9</h4>
        </div>
        <p>+</p>

      </div>

      <div class="box">

        <img src="http://4.bp.blogspot.com/_3uDgLEKQHVA/S7LJ2nmdxhI/AAAAAAAAAZg/pUiRUsVTiZA/s1600/pulp-fiction-poster-orig1.jpg" />

        <h3>Pulp Fiction</h3>
        <h6>Drama film Crime</h6>
        <div class=rating>
          <i class="ion-ios-heart"></i>
          <h4>8.9</h4>
        </div>
        <p>+</p>

      </div>

      <div class="box">
        <img src="https://images-na.ssl-images-amazon.com/images/M/MV5BYThjM2MwZGMtMzg3Ny00NGRkLWE4M2EtYTBiNWMzOTY0YTI4XkEyXkFqcGdeQXVyNDYyMDk5MTU@._V1_SY1000_CR0,0,757,1000_AL_.jpg" />

        <h3>Forrest Gump</h3>
        <h6>Drama Film Comedy</h6>
        <div class=rating>
          <i class="ion-ios-heart"></i>
          <h4>8.8</h4>
        </div>
        <p>+</p>
      </div>

      <div class="box">
        <img src="https://images-na.ssl-images-amazon.com/images/M/MV5BNjNhZTk0ZmEtNjJhMi00YzFlLWE1MmEtYzM1M2ZmMGMwMTU4XkEyXkFqcGdeQXVyNjU0OTQ0OTY@._V1_SY1000_CR0,0,677,1000_AL_.jpg" />

        <h3>The Silence of the...</h3>
        <h6>Drama Crime Thriller</h6>
        <div class=rating>
          <i class="ion-ios-heart"></i>
          <h4>8.6</h4>
        </div>
        <p>+</p>
      </div>

      <div class="box">
        <img src="http://i63.tinypic.com/5btf7a.jpg" />

        <h3>Waking Life</h3>
        <h6>Drama Fantasy</h6>
        <div class=rating>
          <i class="ion-ios-heart"></i>
          <h4>7.8</h4>
        </div>
        <p>+</p>
      </div>

    </div>

    <div class="show-more">
      <i class="ion-ios-more"></i>
    </div>
  </section>

  
</body>

</html>