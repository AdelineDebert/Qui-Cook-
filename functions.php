<?php
// session_start();
//
// $_SESSION['name'] = $_POST['new_name'];
// $_SESSION['email'] = $_POST['new_email'];
// $_SESSION['mdp'] = $_POST['new_mdp'];


$name = $_POST['new_name'];
$email = $_POST['new_email'];
$mdp = $_POST['new_mdp'];

echo $name;
    try
    {
        $connexion = new PDO('mysql:host=localhost; dbname=quicook;charset=utf8', 'root', 'plop');
    } catch ( Exception $e ){
        die('Erreur : '.$e->getMessage() );
    }

    $insertion = "INSERT INTO users (id, prenom, email, password) VALUES (NULL, $name, $email, $mdp)";
    $resultats = $connexion->query($insertion);
    while( $auteur = $resultats->fetch() ){
        echo "<div>".$auteur["prenom"]."-".$auteur["email"]."</div>";
    }



    $resultats->closeCursor();


?>
