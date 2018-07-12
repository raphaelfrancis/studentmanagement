<?php
Class DbConnection{
    function getdbconnect(){
        $conn = mysqli_connect("localhost","root","","college") or die("Couldn't connect");

        return $conn;
    }
}
?>