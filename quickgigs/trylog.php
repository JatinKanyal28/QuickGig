<html>
    <title>Login</title>
    <body>
        <?php
        $usr = "admin@gmail.com";
        $psw = "admin";
        $username = '$_POST[username]';
        $password = '($_POST[password])';
        //$usr == $username && $psw == $password
        session_start();
        if (($_POST['username']=="admin@gmail.com" && $_POST['password']=="admin")) {
            header("Location:show2.php");
            $_SESSION['login']=true;
        }else {
            echo "incorrect login";
        }
        ?>
    </body>
</html>