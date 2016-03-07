<?php

    class Taches
    {
        function __construct()
        {

        }
        function getTaches()
        {
            include 'connect.php';
            if ($result = $mysqli->query("SELECT `id`, `title`, `client`, `description`, `importance`, `validate` FROM `taches` ORDER BY id DESC")) {
                $row = $result->fetch_row();
                return $result;
                $result->close();
            }
        }
        function setTache($tacheName, $tacheClient, $tacheDescription, $tacheStatus)
        {
            include 'connect.php';

            $tacheName = addslashes($tacheName);
            $tacheClient = addslashes($tacheClient);
            $tacheDescription = addslashes($tacheDescription);
            $tacheStatus = addslashes($tacheStatus);

            $mysqli->query("INSERT INTO `taches`(`id`, `title`, `client`, `description`, `importance`) VALUES ('','".$tacheName."','".$tacheClient."','".$tacheDescription."','".$tacheStatus."')");
        }

        function deleteTache($idTache)
        {
            include 'connect.php';
            $mysqli->query("DELETE FROM `taches` WHERE id='". $idTache ."'");

        }

        function validateTache($idTache)
        {
            include 'connect.php';
            $mysqli->query("UPDATE `taches` SET `validate`= 1 WHERE id = '". $idTache ."'");
        }

        function unvalidateTache($idTache)
        {
            include 'connect.php';
            $mysqli->query("UPDATE `taches` SET `validate`= '' WHERE id = '". $idTache ."'");
        }

    }

    class Client
    {
        function __construct()
        {

        }
        function getClients()
        {
            include 'connect.php';
            if ($result = $mysqli->query("SELECT `id`, `name`, `info`, `email` FROM `client` ORDER BY id DESC")) {
                $row = $result->fetch_row();
                return $result;
                $result->close();
            }
        }
        function setClient($name, $info, $email)
        {
            include 'connect.php';
            $name = addslashes($name);
            $info = addslashes($info);
            $email = addslashes($email);

            $mysqli->query("INSERT INTO `client`(`id`, `name`, `info`, `email`) VALUES ('','".$name."','".$info."','".$email."')");
        }
    }

    class Chiffre
    {
        function __construct()
        {

        }

        function getChiffre(){
            include 'connect.php';

            if ($result = $mysqli->query("SELECT `id`, `mois`, `montant` FROM `chiffres`")) {
                $row = $result->fetch_row();
                return $result;
                $result->close();
            }
        }

        function setChiffre($data)
        {
            include 'connect.php';
            $montant = $data['montant'];
            $id = $data['is_submit'];
            $mysqli->query("UPDATE `chiffres` SET `montant`='". $montant ."' WHERE id='". $id ."'");
        }

    }

?>
