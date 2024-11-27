<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Главная</title>
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



    <!--начинается раздел "Главная страница"-->
    <section class="home">
        <div class="swiper-container home-slider">
        <!--Блоки с фото дубай-египет-китай-->
            <div class="swiper-wrapper">
                
                <div class="swiper-slide slide" style="background:url(images/главная-дубай.jpg) no-repeat">
                    <div class="content">
                        <span>Откройте для себя что-то новое</span>
                        <h3>Путешествуйте по всему миру</h3>
                        <a href="package.php" class="btn">Узнать больше</a>
                    </div>
                </div>

                <div class="swiper-slide slide" style="background:url(images/главная-египет.jpg) no-repeat">
                    <div class="content">
                        <span>Откройте для себя что-то новое</span>
                        <h3>Открывайте новые места</h3>
                        <a href="package.php" class="btn">Узнать больше</a>
                    </div>
                </div>

                <div class="swiper-slide slide" style="background:url(images/главная-китай.jpg) no-repeat">
                    <div class="content">
                        <span>Откройте для себя что-то новое</span>
                        <h3>Исполняйте свою мечту</h3>
                        <a href="package.php" class="btn">Узнать больше</a>
                    </div>
                </div>
                
            </div>

        </div>
    </section>
    <!--заканчивается раздел "Главная страница"-->



    <!--начало описания подразделов-->
    <section class="services">
        <h1 class="heading-title">Наши услуги</h1>

        <div class="box-container">

            <div class="box">
                <img src="images/путешествия.ico" alt="">
                <h3>Путешествия</h3>
            </div>

            <div class="box">
                <img src="images/гиды.ico" alt="">
                <h3>Гиды</h3>
            </div>

            <div class="box">
                <img src="images/походы.ico" alt="">
                <h3>Походы</h3>
            </div>

            <div class="box">
                <img src="images/костёр.ico" alt="">
                <h3>Костёр</h3>
            </div>

            <div class="box">
                <img src="images/бездорожье.ico" alt="">
                <h3>Бездорожье</h3>
            </div>

            <div class="box">
                <img src="images/палаточный лагерь.ico" alt="">
                <h3>Палаточный лагерь</h3>
            </div>
            
        </div>
    </section>
    <!--конец описания подразделов-->



    <!--начало раздела "главная информация"-->
    <section class="home-about">
        <div class="image">
            <img src="images/главная-о-нас.jpg" alt="">
        </div>

        <div class="content">
            <h3>О нас</h3>
            <p>
            Мечтаете о бескрайних океанах, заснеженных вершинах или древних городах? <br/>
            Наша компания поможет воплотить ваши мечты в реальность! 
            Мы создаем не просто туры, а незабываемые приключения, наполненные яркими эмоциями и открытиями. 
            Мы бережно относимся к природе, ценим индивидуальность каждого клиента. 
            Откройте для себя мир вместе с нами!
            </p>
            <a href="about.php" class="btn">Подробнее</a>
        </div>
    </section>
    <!--конец раздела "главная информация"-->



    <!--начало раздела "туры"-->
    <section class="home-packages">
        <h1 class="heading-title">Наши туры</h1>

        <div class="box-container">

            <div class="box">
                <div class="image">
                    <img src="images/главная-каир.jpg" alt="">
                </div>
                <div class="content">
                    <h3>Египет, Каир</h3>
                    <p>Путешествие во времени ждет вас в Каире! 
                    Наш тур позволит вам прикоснуться к истории древнего Египта, посетив величественные пирамиды, таинственный Сфинкс и захватывающие музеи. 
                    Вы познакомитесь с богатой культурой Египта, 
                    посетив старые кварталы Каира, испытаете на себе колорит восточных базаров, и окунетесь в атмосферу неповторимого города.
                    </p>
                    <a href="book.php" class="btn">Забронировать</a>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="images/главная-оаэ.jpg" alt="">
                </div>
                <div class="content">
                    <h3>Абу-Даби, ОАЭ</h3>
                    <p>Погрузитесь в мир роскоши и утонченности с нашим эксклюзивным туром в Абу-Даби! 
                    Вас ждет незабываемый отдых в одном из самых богатых городов мира. 
                    Проживите дни в комфортабельных отелях, насладитесь изысканной кухней и посетите самые лучшие достопримечательности,
                    отдохните на белоснежных пляжах. Этот тур – ваш шанс почувствовать себя настоящим шейхом!
                    </p>
                    <a href="book.php" class="btn">Забронировать</a>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="images/главная-шанхай.jpg" alt="">
                </div>
                <div class="content">
                    <h3>Шанхай, Китай</h3>
                    <p>Откройте для себя очарование старого Шанхая и его удивительное сочетание с современностью! 
                    Наш тур позволит вам окунуться в атмосферу старинных кварталов, посетить древние храмы и сады,
                     и познакомиться с богатой культурой этого удивительного города. 
                    Почувствуйте контрасты и насладитесь неповторимым шармом Шанхая.
                    Шанхай – это рай для шопоголиков и любителей развлечений! 
                    </p>
                    <a href="book.php" class="btn">Забронировать</a>
                </div>
            </div>
        </div>
        <div class="load-more"> <a href="package.php" class="btn">Больше туров</a> </div>
    </section>
    <!--конец раздела "туры"-->


    <!--начало-->
    <section class="home-offer">
        <div class="content">
            <h3>Скидки до 50%</h3>
            <p>Приобретите тур сегодня и получите скидку до 50%</p>
            <a href="book.php" class="btn">Забронировать</a>
        </div>
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
                <a href="#"><i class="fas fa-angle-right"></i>Задать вопросы</a>
                <a href="#"><i class="fas fa-angle-right"></i>О нас</a>
                <a href="#"><i class="fas fa-angle-right"></i>Политика конфиденциальности</a>
                <a href="#"><i class="fas fa-angle-right"></i>Условия использования</a>
            </div>

            <div class="box">
                <h3>Контактная информация</h3>
                <a href="#"><i class="fas fa-phone"></i>+55-55-55</a>
                <a href="#"><i class="fas fa-phone"></i>+44-44-44</a>
                <a href="#"><i class="fas fa-envelope"></i>korobeynikova_maria@mail.ru</a>
                <a href="#"><i class="fas fa-map"></i>Moscow, Russia - 495000</a>
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