<?php
session_start();
if (!$_SESSION['user']) {
    header('Location: /');
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <title>Avalon: Личный кабинет</title>
    <link rel="stylesheet" href="/account/assets/css/main.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
</head>
<body>
    <!-- Меню навигации -->
    <header class="header">
        <div class="logo-container">
            <a href="index.php">
                <img src="/img/logo-white.png" alt="" class="logo-white">
            </a>
        </div>
        <div class="menu-navigation">
            <a href="../index.html"><li>Отзывы</li></a>
            <a href="../index.html"><li>Новости</li></a>
            <a href="../index.html"><li>Контактний центр</li></a>
        </div>
        <div class="container-nav-money">
        <i class="fab fa-amazon-pay"></i>
        <a class="usermoney" href="#">Баланс:  <?= $_SESSION['user']['balance'] ?>Р</a>
        </div>
    </header>
    <!-- Профиль -->
    <div class="nav-profile-container">
    <div class="profile-form">

    <form>
        <img src="<?= $_SESSION['user']['avatar'] ?>" width="200" alt="">
        <h2 style="margin: 10px 0;"><?= $_SESSION['user']['full_name'] ?></h2>
        <a href="#"><?= $_SESSION['user']['email'] ?></a>
        <a href="#">Ваш логин:   <?= $_SESSION['user']['login'] ?></a>
        <a href="/account/vendor/logout.php" class="logout">Выйти из аккаунта</a>
    </form>

    <div class="back-to-index">
        <a href="../index.html" class="on-index">Вернутся на главную</a>
    </div>

    </div>
    </div>

    <script src="assets/js/jquery-3.4.1.min.js"></script>
    <script src="assets/js/main.js"></script>
    <script>
        $('.nav-profile-container').css('height', '-=80px');
    </script>
    <script>
        $('.menu-btn').on('click', function(e) {
         e.preventDefault();
        $(this).toggleClass('menu-btn_active');
        $('.menu').toggleClass('menu_active');
        });
    </script>
</body>
</html>