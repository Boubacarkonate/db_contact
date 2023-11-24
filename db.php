<?php
// var_dump($_POST);       //vérifier si on récupère les données de notre formaulaire

/*
connexion à la BDD
-mysqli =>
-new mysqli =>
-new PDO
*/

//connexion à la BDD avec mysqli

$connect = mysqli_connect("localhost", "root","", "cda_contact");

$nom = $_POST["nom"];
$prenom = $_POST["prenom"];
$email = $_POST["email"];
$sujet = $_POST["sujet"];
$message = $_POST["message"];

if (isset($_POST)) {
    
    $sql = "INSERT INTO user (nom, email, prenom, sujet, message) VALUES ('$nom', '$prenom', '$email', '$sujet', '$message')";

    $result = mysqli_query($connect, $sql);
    if ($result) {
        echo "message envoyé";
    }else {
        echo "erreur";
    }
}