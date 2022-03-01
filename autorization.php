<!DOCTYPE html>
<html lang="en">
<head>
    <script src="assets/javascript/funcs.js"></script>

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
        <!-- <img src="assets/img/CloudTask.svg" alt=""> -->
    </header>
    <div class="form">
        <div class="form_top ">
            <h1>Вход</h1>
        </div>
        <form action="login.php" method="post" class="form_main flex-fdc">
            <div class="main_login flex-fdc">
                <label for="Username">
                    Логин
                </label>
                <input type="text" placeholder="Введите логин" name="uname">
            </div>
            <div class="main_password flex-fdc">
                <label for="Password">
                    Пароль
                </label>
                <div class="password_body ">
                    <input type="password" id="passid" placeholder="Введите пароль" name="password">
                    <input id="hide" type="button" onclick="hidePassword() ">

                </div>
            </div>

            <button type="submit" id="send-form">Войти</button>
            <button id="forgot-pass">Забыли пароль?</button>
            <?php if (isset($_GET['error'])) { ?>
            <p class="error"><?php echo $_GET['error']; ?></p>
            <?php } ?>
        </form>

    </div>  
</body>
</html>
