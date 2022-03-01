<?php 

session_start(); 

include "connect.php";

if (isset($_POST['uname']) && isset($_POST['password'])) {
    function validate($data){
       $data = trim($data);
       $data = stripslashes($data);
       $data = htmlspecialchars($data);
       return $data;
    }

    $uname = validate($_POST['uname']);
    $pass = validate($_POST['password']);

    if (empty($uname)) {
        header("Location: autorization.php?error=Необходимо ввести логин");
        exit();

    }
    else if(empty($pass))
    {
        header("Location: autorization.php?error=Необходимо ввести пароль");
        exit();

    }
    else{

        $query = "SELECT * FROM admin WHERE nickname='$uname' AND password='$pass'";

        $result = mysqli_query($conn, $query) or die(mysqli_error($conn));
        
        if (mysqli_num_rows($result) === 1) {
            $row = mysqli_fetch_assoc($result);
            
            if ($row['nickname'] === $uname && $row['password'] === $pass) {
                echo "Logged in!";
                $_SESSION['nickname'] = $row['nickname'];
                $_SESSION['id'] = $row['id_admin'];
                header("Location: index.php");
                exit();
            }else{
                header("Location: autorization.php?error=Неверный логин или пароль");
                exit();
            }

        }
        else{
            header("Location: autorization.php?error=Неверный логин или пароль");
            exit();
        }
    }
}
else{
    header("Location: autorization.php");
    exit();
}