<?php
    include 'connection.php';

    if (isset($_POST['submit-btn'])){
        $filter_name = filter_var($_POST['fio'], FILTER_SANITIZE_STRING);
        $name = mysqli_real_escape_string($conn, $filter_name);

        $filter_email = filter_var($_POST['email'], FILTER_SANITIZE_STRING);
        $email = mysqli_real_escape_string($conn, $filter_email);

        $filter_password = filter_var($_POST['password'], FILTER_SANITIZE_STRING);
        $password = mysqli_real_escape_string($conn, $filter_password);

        $filter_cpassword = filter_var($_POST['cpassword'], FILTER_SANITIZE_STRING);
        $cpassword = mysqli_real_escape_string($conn, $filter_cpassword);

        $select_user = mysqli_query($conn, "SELECT * FROM `user`  where `email` = '$email'") or die('query failed');

        if(mysqli_num_rows($select_user) > 0){
            $message[] = 'Пользователь уже существует';
        }else{
            if($password != $cpassword){
                $message[] = 'Пароли не совпадают';
            }else {
                $hash = password_hash($password, PASSWORD_DEFAULT);
                mysqli_query($conn, "INSERT INTO `user`(`fio`, `email`, `password`) values('$name','$email', '$hash')") or die('query failed');
                $message[] = 'Успешно зарегистрируйтесь';
                header('location:login.php');
            }
        }
    }

?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css" rel="stylesheet"> <!-- Ссылка на иконки, у пользователь уже существует появляется крестик -->
    <link rel="stylesheet" type="text/css" href="css/style.css"> <!--Подключение файла со стилями -->
    <title>Страница регистрации пользователя</title> <!-- заголовок страницы во вкладке браузера -->
</head>
<body background = "images/1.jpg"> 
    <!--Контейнер - прозрачный блок  на странице регистрации пользователя-->
    <!--При нажатии удаление элемента-->
    <?php
        if(isset($message)){
            foreach($message as $message){
                echo'
                <div class="message"> 
                <span>'.$message.'</span>
                <i class="bi bi-x-circle" onclick="this.parentElement.remove()"></i> 
                </div>
                ';
            }
        }
    ?>
    <section class="form-container"> <!-- Тематический блок -->
        <form action="" method="post"> <!-- Отправка данных формы на текущей странице-->
            <h3>Зарегистрироваться</h3>
            <input type="text" name="fio" placeholder="Введите своё имя" required>
            <input type="date" name="birthday" placeholder="Введите свою дату рождения" required>
            <input type="tel" name="phone" placeholder="Введите свой номер телефона" required>
            <input type="email" name="email" placeholder="Введите свой email" required>
            <input type="password" name="password" placeholder="Введите свой пароль" required>
            <input type="password" name="cpassword" placeholder="Подтвердите свой пароль" required>
            <input type="submit" name="submit-btn" class="btn" value="Зарегистрируйтесь прямо сейчас"> <!-- Создание кнопки-->
            <p>У Вас уже есть аккаунт?<a href="login.php"> Войти</a></p> <!-- Ссылка на форму с войти-->
        </form>
    </section>
</body>
</html>

