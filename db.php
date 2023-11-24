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
if ($connect) {
    echo "connecté";
} else {
    echo "erreur";
}