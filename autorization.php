<?php
    if (isset($_POST['auth_name'])) {
        $name=mysqli_real_escape_string($conn, $_POST['auth_name']);
        $pass=mysqli_real_escape_string($conn, $_POST['auth_pass']);
        
        $query = "SELECT * FROM users WHERE name='$name' AND pass='$pass'";
        $res = mysqli_query($conn, $query) or trigger_error(mysql_error().$query);
        
        if ($row = mysqli_fetch_assoc($res)) {
            session_start();
            $_SESSION['user_id'] = $row['id'];
            $_SESSION['ip'] = $_SERVER['REMOTE_ADDR'];
        }
        header("Location: http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);
        exit;
    }
    if (isset(@$_GET['action']) AND @$_GET['action']=="logout") {
        session_start();
        session_destroy();
        header("Location: http://".$_SERVER['HTTP_HOST']."/");
        exit;
    }
    if (isset($_REQUEST[session_name()])) session_start();
    if (isset($_SESSION['user_id']) AND $_SESSION['ip'] == $_SERVER['REMOTE_ADDR']) return;
    else {
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="assets/styles/style.css">
    <link rel="stylesheet" href="assets/styles/auth.css">
    <link rel="stylesheet" href="assets/styles/reset.css">
    
    
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Авторизация</title>
</head>
<body> 
    <header class="title">
        <img src="assets/img/CloudTask.svg" alt="">
    </header>
    <div class="form">
        <div class="form_top ">
            <h1>Вход</h1>
        </div>
        <form action="/" method="post" class="form_main flex-fdc" >
            <div class="main_login flex-fdc">
                <label for="Username">
                    Логин
                </label>
                <input type="text" placeholder="Enter Username" name="uname" required>
            </div>
            <div class="main_password flex-fdc">
                <label for="Password">
                    Пароль
                </label>
                <div class="password_body ">
                    <input type="password" placeholder="Enter Password" name="psw" required>
                    <img src="assets/img/глаз.svg" alt=""    button id="hide"></img>
                </div>
            </div>
            <button id="send-form">Войти</button>
        </form>
        <button id="forgot-pass">Забыли пароль?</button>
    </div>  
</body>
</html>
<?
}
exit;
?>