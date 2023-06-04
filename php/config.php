<?php
    $conn = mysqli_connect("localhost", "root", "", "friendlychat");

    if(!$conn){
       echo "Base de données connecté!" .mysqli_connect_error();
    }

?>
