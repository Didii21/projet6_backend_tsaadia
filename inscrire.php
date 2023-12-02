



<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="contenaire">
        <button class="but"><a href="inscrire.php">Se connecter</a></button>

        <h1>Inscription</h1>
        <form action="connecter.php" method="post">
            <input type="text" name="nom"  placeholder="Entrez votre nom">
            <input type="text" name="prenom" placeholder="Entrez votre prenom">
            <input type="email" name="email" placeholder="Entrez votre Email">
            <input type="password" name="code" placeholder="Entrez votre mot de passe">
            <input type="submit" value="VALIDER" name="submit" class="submit">
        </form>
        <!-- <img src="image/img4.png" alt="" width="200px" > -->
        
    </div>
</body>
</html>
