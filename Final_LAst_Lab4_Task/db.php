<?php 

    $host = "localhost";
    $dbname = "test";
    $dbpass = "";
    $dbuser = "root";

    function getConnection(){
        global $host;
        global $dbname;
        global $dbpass;
        global $dbuser;

        $conn = mysqli_connect($host, $dbuser, $dbpass, $dbname);
        return $conn;
    }
?>
