<?php
include 'connect.php';
$idArticle = $_GET['id'];
$mysqli->query("DELETE FROM `playlist` WHERE id = " . $idArticle . "");  
