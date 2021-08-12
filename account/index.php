<?php
session_start();

if ($_SESSION['user']) {
    header('Location: profile.php');
}

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Авторизация и регистрация</title>
    <link rel="stylesheet" href="assets/css/profile.css">
</head>
<body>

    <!-- Форма авторизации -->
    <div class="logotype-profile">
    <a href="../index.html">
            <img src="../img/logo.png" alt="">
     </a>
     </div>

    <form class="register-form ">
        <label>Логин</label>
        <input type="text" name="login" placeholder="Введите свой логин">
        <label>Пароль</label>
        <input type="password" name="password" placeholder="Введите пароль">
        <button type="submit" class="login-btn">Войти</button>
        <p>
            У вас нет аккаунта? - <a href="/account/register.php">зарегистрируйтесь</a>!
        </p>
        <p class="msg none">Lorem ipsum dolor sit amet.</p>
    </form>

    <div class="bg-profile">
    </div>


    <script src="assets/js/jquery-3.4.1.min.js"></script>
    <script src="assets/js/main.js"></script>

</body>
</html>