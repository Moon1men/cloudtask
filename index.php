<?php 

session_start();
if (isset($_SESSION['id']) && isset($_SESSION['nickname'])) {

 ?>

<!DOCTYPE html>
<html lang="en">
<head>
   
    <script src="assets/javascript/menu.js"></script>
    <link rel="stylesheet" href="assets/styles/reset.css">
    <link rel="stylesheet" href="assets/styles/style.css">
    
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Расписание CloudTask</title>
</head>
<body>    
    <header class="header">
        
        <div class="wrapper">
            <div class="dropdown">
                <img src="assets/img/Меню.svg" alt="" button onclick="myFunction()" class="dropbtn">
                   
                </button>
                
                <div id="myDropdown" class="dropdown-content">
                  <a href="#">Предметы</a>
                  <a href="#">Преподаватели</a>
                  <a href="#">Группы</a>
                  <a href="#">Ссылки</a>
                </div>
            </div>
            
            <div class="logo">
                <h1 class="logo_title">
                 <img src="assets/img/CloudTask.svg" alt="cloudtask">
                </h1> 
            </div>
            <div class="profile">
                <p>nickname</p>
                <img src="assets/img/Окно пользователя.svg" alt="profile">
            </div>
        </div>
        <div class="main">
            <div class="main_wrapper">
                <div class="card">
                    <div class="card_body">
                        <p>Сообщение</p>
                        <img src="assets/img/message.svg" alt="message">    
                    </div>
                    <p></p>
                </div>
                <div class="card">
                    <div class="card_body">
                    <p>Расписание</p>
                    <img src="assets/img/calendar.svg" alt="message">
                    
                    </div>
                    <p></p>
                </div>
                <div class="card">
                    <div class="card_body">
                    <p>Редактор ссылок</p>
                    <img src="assets/img/pencil.svg" alt="message">
                    </div>
                    <p></p>
                </div>
                <div class="card">
                    <div class="card_body">
                    <p>Заголовок</p>   
                    </div>
                    <p></p>
                </div>
                <div class="card">
                    <div class="card_body">
                    <p>Заголовок</p>
                    </div>
                    <p></p> 
                </div>
                    
            
                <div class="card">
                    <div class="card_body">
                    <p>Заголовок</p>
                    </div>
                    <p></p>
                </div>
                
            </div>
            
        </div>
        </header>
</body>
</html>

<?php 

}else{
     header("Location: autorization.php");
     exit();
}
?>