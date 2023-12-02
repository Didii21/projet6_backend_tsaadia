<?php

session_start();

if( isset($_SESSION['id']) && !empty($_SESSION['id']) ){

    header("location:connecter.php");
    exit;

}else{
      
 } 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
    <title>sites</title>
</head>
<?php include ("navbar.php") ?>
<div class="content">
        <h1>Bienvenue au Faso</h1>
        <p>Visitez nos sites riches <br> en beauté et en art</p>
        <div>
            <button type="button"><span><a href=""></a></span>Visiter la page</button>
            <button type="button"><span><ul><li><a href="gallerie.php"></a></li></ul></span>Voir la galerie</button>
        </div>
       </div>
<body>
<div class="card mb-3" style="margin:20%";>
  <img src="sahel.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">A Ouagadougou</h5>
    <p class="card-text">Le Sahel (de l'arabe سَاحِل, sāḥil, « rivage » ou « côte ») désigne une bande de l'Afrique marquant la transition, à la fois floristique et climatique, entre le domaine saharien au nord et les savanes du domaine soudanien, où les pluies sont substantielles, au sud. D'ouest en est, il s'étend de l'Atlantique à la mer Rouge. </p>
   <button type="button"><span></span>Visiter</button>
    <!-- <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p> -->
  </div>
</div>
<div class="card mb-3" style="margin:20%";>
  <img src="s2.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">A Banfora</h5>
    <p class="card-text">Balla est une commune rurale située dans le département de Satiri de la province du Houet dans la région des Hauts-Bassins au Burkina Faso.</p>
    <!-- <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p> -->
    <button type="button" class=""><span></span>Visiter</button>
</div>
</div>
<div class="card mb-3" style="margin:20%";>
  <img src="s5.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">A Dédougou</h5>
    <p class="card-text">Les crocodiles sacrés de Sabou. Ils sont plus d’une centaine et vivent dans une mare depuis des siècles au côté nord de Sabou. Pour avoir sauvé la vie de leur ancêtre chasseur, les descendants de la famille Kaboré et tout le village de Sabou avec, vénèrent ces crocodiles.</p>
    <button type="button"><span></span>Visiter</button>
    <!-- <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p> -->
  </div>
</div>
</body>
<?php include ("footer.php") ?>
</html>