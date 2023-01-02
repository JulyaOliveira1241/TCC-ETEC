<?php
ini_set('display_errors', 0 );
error_reporting(0);
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
    <header>
      <div class="logo">
      <a href=""><img src="https://boracha.000webhostapp.com/img/logoH.png" alt="Boracha logo">
      </div>
    </header>
    <div class="search-box">

    <input class="search-txt" type="text" name="" placeholder="Qual filme esta procurando?">
    <a class="search-btn" href="style.css"></a>
    <i class="fas fa-search"></i>

    </div>
    <style> 

    .search-box{
    position: absolute;
    top: 12%;
    left: 80%;
    transform: translate(-70%, -50%);
    background: #353b48;
    height: 40px;
    border-radius: 40px;
    padding: 10px;  

}
   .search-txt{
     border: none;
     background: none;
     outline: none;
     float: left;
     padding: 0;
     color: white;
     font-size: 16px;
     transition: 0.4s;
     line-height: 20px;
     width: 200px;

   }

  </style>
<?php
    
    //HABILITANDO A API PARA PEGAR INFORMAÇÕES DAS TENDENCIAS
        $urltt= "https://api.themoviedb.org/3/trending/tv/day?api_key=d0c24266ec2ff53c34cff3cdf84890be";
        $tes = json_decode(file_get_contents($urltt));
    //var_dump($tes);
    //var_export($tes)
    
    
    //URL DAS IMAGENS 
    $urlImgs="https://image.tmdb.org/t/p/w200/";
    $urlbanner ->poster_path;
    $urlExib="https://image.tmdb.org/t/p/w200/" /*$urlImgs.$urlbanner;*/;
     
    
    foreach ((array)$tes-> results as $serie) {
    echo "Titulo ".$serie->name."<br>";
    echo "https://image.tmdb.org/t/p/w200".$serie->poster_path."<br>";
    echo "titulo Original ".$serie->original_name."<br>";
    echo "<hr>";
    }
    
    
    ?>
    <img src=<?=$urlExib?>  alt=""> 
      </body>






    </body>
</html>