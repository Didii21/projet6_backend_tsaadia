<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>nav</title>
</head>
<body>
    <div class="banner">
       <div class="navbar">
        <img src="egypte-paysage_.avif" class="logo" alt="">
        <ul>
            <li><a href="index.php">Accueil</a></li>
            <li><a href="ouagadougou.php">Ouagadougou</a></li>
            <li><a href="banfora.php">Banfora</a></li>
            <li><a href="dedougou.php">Dédougou</a></li>
            <li><a href="inscrire.php">S'inscrire</a></li>
            <li><a href="connecter.php">Se connecter</a></li>
        </ul>
        
        <form action="">
        <div class="mail">
        <?php 
        if ($_SESSION['email']) {
            echo $_SESSION['email'];
        }?>
        </div>
        <div class="dec">
        <?php 
        if ($_SESSION['email']) {
            echo '<button>DECONNEXION</button>';
        }?>
        </div>
        </form>
       </div> 
       
    </div>
</body>
</html>