<?php
$mysqli = new mysqli("localhost", "root", "root", "workflow");

/* Vérification de la connexion */
if (mysqli_connect_errno()) {
    printf("Échec de la connexion : %s\n", mysqli_connect_error());
    exit();
}

?>
