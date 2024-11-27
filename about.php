<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>О нас</title>
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


    <div class="heading" style="background:url(images/фон-о-нас.jpg) no-repeat">
        <h1>О нас</h1>
    </div>


    <!--начало-->
    <section class="about">
        <div class="image">
            <img src="images/о-нас-информация.jpg" alt="">
        </div>

        <div class="content">
            <h3>Почему именно мы?</h3>
            <p>В мире, полном возможностей для путешествий, выбрать надежного партнера — это залог успешного и незабываемого отдыха.<br/> 
            Наша туристическая компания «Туры Заграницу» предлагает вам уникальный опыт, который сделает ваше путешествие не только комфортным, 
            но и по-настоящему запоминающимся.<br/>
            Вот несколько причин, почему именно мы — ваш идеальный выбор для путешествий за границу:<br/>
            1. Индивидуальный подход<br/>
            2. Широкий выбор напрвлений<br/>
            3. Квалифицированные специалисты<br/>
            4. Конкурентные цены<br/>
            5. Безопасность и поддержка</p>
            
            <div class="icons-container">
                <div class="icons">
                    <i class="fas fa-map"></i>
                    <span>Лучшие направления</span>
                </div>
                <div class="icons">
                    <i class="fas fa-hand-holding-usd"></i>
                    <span>Доступная и выгодная цена</span>
                </div>
                <div class="icons">
                    <i class="fas fa-headset"></i>
                    <span>Услуги гида в режиме 24/7</span>
                </div>
            </div>
        </div>
    </section>
    <!--конец-->



    <!--начало экскурсоводы оценка-->
    <section class="reviews">
        <h1 class="heading-title">Наши экскурсоводы</h1>
        <div class="swiper-container reviews-slider">

            <div class="swiper-wrapper">

                <div class="swiper-slide slide">
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <p>Я провела незабываемый день с Мариной, 
                    нашей экскурсоводом в Каире. 
                    Она была невероятно знающей и страстной в рассказах о древних египетских памятниках. 
                    Мы посетили пирамиды Гизы и Сфинкса, и Амина поделилась множеством интересных фактов и историй. 
                    Я чувствовала себя в безопасности и комфорте на протяжении всей экскурсии. 
                    Рекомендую всем!
                    </p>
                    <h3>Марина</h3>
                    <span>Экскурсовод</span>
                    <img src="images/экс1.jpg" alt="">
                </div>

                <div class="swiper-slide slide">
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <p>Экскурсия по Абу-Даби с Павлом была потрясающей. 
                    Он показал нам все главные достопримечательности, включая мечеть Шейха Зайда и Лувр Абу-Даби. 
                    Халид был очень дружелюбным и отвечал на все наши вопросы. 
                    Единственное, что я бы хотел улучшить — это больше времени на посещение музея.
                    </p>
                    <h3>Павел</h3>
                    <span>Экскурсовод</span>
                    <img src="images/экс2.jpg" alt="">
                </div>

                <div class="swiper-slide slide">
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <p>Владимир был нашим экскурсоводом во время поездки по историческим местам Каира. 
                    Он знал все о культуре и истории Египта, и его рассказы были увлекательными. 
                    Мы также посетили базар Хан эль-Халили, где он помог нам торговаться с местными продавцами. 
                    Это был один из лучших дней в нашей жизни!
                    </p>
                    <h3>Владимир</h3>
                    <span>Экскурсовод</span>
                    <img src="images/экс3.jpg" alt="">
                </div>

                <div class="swiper-slide slide">
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <p>Виктория была нашим гидом во время экскурсии по Каиру. 
                    Она была очень внимательной и заботилась о том, чтобы каждый из нас чувствовал себя комфортно. 
                    Мы посетили музей древнеегипетских древностей и пирамиды. 
                    Единственное, что я бы хотел, это больше времени на изучение музея, так как там было много интересного!
                    </p>
                    <h3>Виктория</h3>
                    <span>Экскурсовод</span>
                    <img src="images/экс4.jpg" alt="">
                </div>

                <div class="swiper-slide slide">
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <p>Экскурсия по Шанхаю с Дарьей была просто великолепной! 
                    Она обладает глубокими знаниями о культуре и истории города, и её увлекательные рассказы сделали нашу поездку незабываемой. 
                    Мы посетили такие знаковые места, как Набережная Бунд, район Пудун и храм Нефритового Будды. 
                    Дарья также поделилась интересными местными традициями и даже показала нам несколько скрытых жемчужин, о которых мы не знали. 
                    Она была очень внимательной к нашим потребностям и всегда готова ответить на вопросы. 
                    Если вы хотите узнать больше о Шанхае и его культуре, я настоятельно рекомендую экскурсии с Дарьей!
                    </p>
                    <h3>Дарья</h3>
                    <span>Экскурсовод</span>
                    <img src="images/экс5.jpg" alt="">
                </div>

            </div>

            <div class="swiper-pagination"></div>
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