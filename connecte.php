<?php
try{
    $bdd = new PDO('mysql:host=localhost;dbname=sites touristiques', 'root', '');
}
catch(Exception $e)
{
    die('Erreur: '.$e->getMessage());
}
$Email= $_POST["email"];
$Code= $_POST["code"];
$req= $bdd->prepare('SELECT * FROM connecter WHERE email= :email AND code= :code');
$req->execute([
  'email' => $Email,
  'code' => $Code,
]);
 $user= $req->fetch();
 if ($user['email'] AND $user['code']){
  session_start();
  $_SESSION['email']= $Email;
  $_SESSION['code']= $Code;
  header('Location: index.php');
 }

?>