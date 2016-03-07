<?php
$mysqli = new mysqli("localhost", "root", "root", "workface");
mysqli_set_charset($mysqli,"utf8");

/* Vérification de la connexion */
if (mysqli_connect_errno()) {
    printf("Échec de la connexion : %s\n", mysqli_connect_error());
    exit();
}

?>
