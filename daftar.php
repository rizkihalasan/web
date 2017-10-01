<?php
    // Fungsi untuk menghubungkan ke MySQL
    function connectTOSQL(){
        return mysqli_connect("localhost", "root", "", "ojek2an");
    }

    // Fungsi untuk memvalidasi form pendaftaran
    function validasiDaftar($name, $username, $email, $password, $confirm, $phone){
        if(strlen($password) < 8){
            return false;
        }
        if ($password != $confirm){
            return false;
        }
        return true;
    }


    function masukkanData($db, $id, $name, $username, $email, $password, $confirm, $phone){
        if (validasiDaftar($name, $username, $email, $password, $confirm, $phone)){
            $sql = "insert into profil values('$id','$name', '$username', '$email', '$password', '$phone')";
            if (mysqli_query($db, $sql)){
                echo "berhasil";
            }
            else{
                echo "gagal";
            }
        }
        else{
            echo "Data tidak valid";
        }
    }
    session_start();
    $db = connectTOSQL();

    $name = $_POST['name'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirm = $_POST['confirm'];
    $phone = $_POST['phone'];

    $sql = "select * from profil";
    $result = mysqli_query($db, $sql);
    $count = mysqli_num_rows($result);
    $count++;
    masukkanData($db, $count, $name, $username, $email, $password, $confirm, $phone);
?>