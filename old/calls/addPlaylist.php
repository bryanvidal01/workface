<?php
    include 'connect.php';

    $name = $_GET['name'];
    $url = $_GET['url'];
    $mysqli->query("INSERT INTO `playlist`(`id`, `name`, `iframe`) VALUES ('','$name','$url')");

?>
