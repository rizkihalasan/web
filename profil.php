<html>
<head>
    <link rel="stylesheet" type="text/css" href="profil.css">
</head>
<title>Profil</title>
<body>
    <?php
        session_start();
        function connectTOSQL(){
            return mysqli_connect("localhost", "root", "", "ojek2an");
        }
        $id = $_GET['id_active'];
        $db = connectTOSQL();
        $usernamesql = "select Username from profil where ID = '$id'";
        $username_result = mysqli_query($db, $usernamesql);
        $username_row = mysqli_fetch_array($username_result, MYSQLI_ASSOC);
        $username = $username_row['Username'];
        connectTOSQL();

        echo"<h3>PR-OJEK</h3>";
        echo"<h3 id='hai'>hi, $username</h3>";
        echo"<a class='logout' href='login.html' >logout</a>";
        echo"wush... wush... ngeeeeng";
        echo $id;

    ?>
</body>
</html>