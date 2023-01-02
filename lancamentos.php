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
      <a href="index.php"> <img src="img/logoh.png" alt="Boracha logo">
      </div>

      <nav class="main-nav">
        <ul>
          <li><a href="index.php">HOME</a></li>
          <li><a href="#">LANÇAMENTOS</a></li>
          <li><a href="#">EM ALTA</a></li>
        </ul>
      </nav>





      </body>
</html>