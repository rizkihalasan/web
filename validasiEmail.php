<?php
    function connectTOSQL(){
        return mysqli_connect("localhost", "root", "", "ojek2an");
    }

    session_start();
    $db = connectTOSQL();
    $email = $_GET['email'];
    $sql = "select * from profil where Email = '$email'";
    $result = mysqli_query($db, $sql);
    $count = mysqli_num_rows($result);
    if ($count == 0){
        echo "check.png";
    }
    else{
        echo "cross_icon.png";
    }
?>