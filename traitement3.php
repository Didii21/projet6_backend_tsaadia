<?php
    try
    {
        $bdd=new PDO('mysql:host=localhost;dbname=connecter','root','');
    }
    catch(Exception $e)
    {
        die("Erreur :" .$e->getMessage());
    }
    ?>