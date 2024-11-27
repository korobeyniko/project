<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Забронировать</title>
    <!--ссылка на swiper css-->
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css">
    <!--ссылка на cdn шрифта awesome-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <!--ссылка на пользовательский css-файл-->
    <link rel="stylesheet" href="css/style.css">
    <!--ссылка на иконки социальных сетей-->    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
</head>



<body>
    <!--начинается раздел заголовка-->
    <?php require_once "header.php" ?>
    <!--заканчивается раздел заголовка-->

    <div class="heading" style="background:url(images/фон-забронировать.jpg) no-repeat">
        <h1>Забронировать</h1>
    </div>


    <!--начало-->
    <section class="booking">
        <h1 class="heading-title">Забронируйте свою поездку!</h1>

        <form action="book_form.php" method="post" class="book-form">

            <div class="flex">
                <div class="inputBox">
                    <span>ФИО :</span>
                    <input type="text" placeholder="Введите свои ФИО" name="name">
                </div>
                <div class="inputBox">
                    <span>Почта :</span>
                    <input type="email" placeholder="Введите свой email" name="email">
                </div>
                <div class="inputBox">
                    <span>Телефон :</span>
                    <input type="number" placeholder="Введите свой телефон" name="phone">
                </div>
                <div class="inputBox">
                    <span>Количество взрослых от 18 лет :</span>
                    <input type="number" placeholder="Количество гостей" name="guests1">
                </div>
                <div class="inputBox">
                    <span>Количество детей :</span>
                    <input type="number" placeholder="Количество гостей" name="guests2">
                </div>
                <div class="inputBox">
                    <span>Дата покупки тура :</span>
                    <input type="date" name="date">
                </div>
                <div class="inputBox">
                    <span>Куда поедете :</span>
                    <input type="text" placeholder="Место, которое хотите посетить" name="location">
                </div>
            </div>

            <input type="submit" value="Забронировать" class="btn" name="send">

        </form>
    </section>
    <!--конец-->



    <!--начинается раздел нижнего колонтитула-->
    <section class="footer">
        <div class="box-container">
            <div class="box">
                <h3>Быстрые ссылки</h3>
                <a href="home.php"><i class="fas fa-angle-right"></i>Главная</a>
                <a href="about.php"><i class="fas fa-angle-right"></i>О нас</a>
                <a href="package.php"><i class="fas fa-angle-right"></i>Туры</a>
                <a href="book.php"><i class="fas fa-angle-right"></i>Забронировать</a>
            </div>

            <div class="box">
                <h3>Дополнительные ссылки</h3>
                <a href="#"><i class="fas fa-angle-right"></i>Задавать вопросы</a>
                <a href="#"><i class="fas fa-angle-right"></i>О нас</a>
                <a href="#"><i class="fas fa-angle-right"></i>Политика конфиденциальности</a>
                <a href="#"><i class="fas fa-angle-right"></i>Условия использования</a>
            </div>

            <div class="box">
                <h3>Контактная информация</h3>
                <a href="#"><i class="fas fa-phone"></i>+55-55-55</a>
                <a href="#"><i class="fas fa-phone"></i>+44-44-44</a>
                <a href="#"><i class="fas fa-envelope"></i>korobeynikova_maria@mail.ru</a>
                <a href="#"><i class="fas fa-map"></i>Moscow, Russia - 400104</a>
            </div>

            <div class="box">
                <h3>Наши социальные сети</h3>
                <a href="#"><i class="fa fa-instagram"></i>Instagram</a>
                <a href="#"><i class="fa fa-vk"></i>VK</a>
            </div>
        </div>
    </section>
    <!--заканчивается раздел нижнего колонтитула-->

    <!--ссылка на swiper js-->
        <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

    <!--ссылка на пользовательский js-файл-->
        <script src="js/script.js"></script>
</body>

</html>