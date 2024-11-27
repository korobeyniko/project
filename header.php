<?php
if(isset($_COOKIE["name"])){
    $_SESSION["user_email"]= $_COOKIE["name"];
}
?>
<section class="header">
        <a href="home.php" class="logo">Путешествие</a>

        <nav class="navbar">
            <a href="home.php">Главная</a>
            <a href="about.php">О нас</a>
            <a href="package.php">Туры</a>
            
            <?php 
            if(isset($_SESSION["user_email"])){
                echo "<a href='book.php'>Забронировать</a>";
                echo "<a href='exit.php'>Выход</a>";
                echo $_SESSION["user_email"];
            } else 
            {
                echo "<a href='login.php'>Войти</a>";
            }
            ?>
        </nav>
        <div id="menu-btn" class="fas fa-bars"></div>
    </section>