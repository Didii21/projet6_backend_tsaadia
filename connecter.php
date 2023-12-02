
<?php
try{
    $bdd = new PDO('mysql:host=localhost;dbname=sites touristiques', 'root', '');
}
catch(Exception $e)
{
    die('Erreur: '.$e->getMessage());
}
$Nom= $_POST["nom"];
$Prenom= $_POST["prenom"];
$Email= $_POST["email"];
$Code= $_POST["code"];
// $Age= $_POST["Age"];
// $nom_d_utilisateur= $_POST["nom_d_utilisateur"];

echo "First: $Nom <br> ";
echo "Last: $Prenom <br> ";
echo "Email: $Email <br> ";
echo "Code: $Code <br> ";
// echo "Age: $Age <br> ";
// echo "nom_d_utilisateur: $nom_d_utilisateur <br> ";

// $rol= $bdd->query("SELECT statut FROM roles WHERE statut= 'utilisateur' ");
// $roles= $rol->fetch();
$req= $bdd->prepare('INSERT INTO connecter(nom, prenom, email, code) VALUES(:nom, :prenom, :email, :code)');
$req->execute([
    'nom' => $Nom,
    'prenom' => $Prenom,
    'email' => $Email,
    'code' => $Code,
]);
echo 'Les données sont sauvegardées';
header('Location: connectp.php');
exit();
?>




