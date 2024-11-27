<?php
    include 'connection.php';
    session_start();
    if (isset($_POST['submit-btn'])){

        $filter_email = filter_var($_POST['email'], FILTER_SANITIZE_STRING);
        $email = mysqli_real_escape_string($conn, $filter_email);

        $filter_password = filter_var($_POST['password'], FILTER_SANITIZE_STRING);
        $password = mysqli_real_escape_string($conn, $filter_password);

        $select_user = mysqli_query($conn, "SELECT * FROM `user`  where `email` = '$email'") or die('query failed');

        if(mysqli_num_rows($select_user) == 1){
            $row = mysqli_fetch_assoc($select_user);
            $hash = $row['password'];
            if(!password_verify($password, $hash)){
                $message[] = 'Неверный адрес электронной почты или пароль';
                return;
            }   
            
                $_SESSION['user_name'] = $row['fio'];
                $_SESSION['user_email'] = $row['email'];
                $_SESSION['user_id'] = $row['id'];
                setcookie("name", $row['email'], time()+60*60*24);
                setcookie("id", $row['id'], time()+60*60*24);
                header('location:home.php');
            
        }
    }

?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <title>Страница регистрации пользователя</title>
</head>
<body background="images/1.jpg">
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
    <section class="form-container">
        <form action="" method="post">
            <h3>Войти</h3>
            <input type="email" name="email" placeholder="Введите свой email" required>
            <input type="password" name="password" placeholder="Введите свой пароль" required>
            <input type="submit" name="submit-btn" class="btn" value="Войдите прямо сейчас">
            <p>У Вас ещё нет аккаунта ? <a href="index.php">Зарегистрироваться</a></p>
        </form>
    </section>
</body>
</html>