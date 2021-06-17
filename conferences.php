<?php
    $_GET['page'] = 'conferences';
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- links -->
    <link rel="stylesheet" href="assets/styles/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="shortcut icon" href="/assets/img/bpoo_ico.ico" type="image/x-icon">
    <!--  -->
    <title>Конференции</title>
</head>
<body>
<header>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-4 header__icons">
                <a href=""><img src="assets/img/vkontakte.png" alt="pic" class="icons__icon"></a>
                <a href=""><img src="assets/img/instagram.png" alt="pic" class="icons__icon"></a>            
                <a href=""><img src="assets/img/twitter.png" alt="pic" class="icons__icon"></a>
            </div>
            <div class="col-md-4 header__logo">
                <img src="assets/img/bpoo_logo.png" alt="pic" class="logo__logo">
                <p>Базовая профессиональная <br> образовательная организация <br> Самарской области</p>
            </div>
            <div class="col-md-4 header__feedbackIcons">
                <div class="feedbackIcons__icon">
                    <img src="assets/img/email.png" alt="pic">
                    <p>Напишите нам <br> tspk@edu.tgl.ru</p>
                </div>
                <div class="feedbackIcons__icon">
                    <img src="assets/img/smartphone.png" alt="pic" class="icon__2icon">
                    <p>Позвоните нам <br> 8 (8482) 24-10-25</p>
                </div>
            </div>
            <div class="col-md-12 menu">
                <?php include("abiturientMenu.php")?>
            </div>
        </div>
    </div>
</header>
<!-- main -->
<main>
<div class="container-fluid">
        <div class="row">
            <!-- titles -->
            <div class="col-md-12 main__title">
                <p class="title__main tittle__abiturient">Конференции</p>
            </div>
            <div class="col-md-2 main__docsMenu">
                <ul>
                    <li><a href="docs.php">Документы</a></li>
                    <li><a href="local_docs.php">Локальные документы</li>
                    <li><a href="logistics_support.php">Материально-техническое обеспечение обучающихся с ограниченными возможностями здоровья и инвалидностью</a></li>
                    <li><a href="educ_meth_support.php">Учебно-методическое обеспечение инклюзивного образования</a></li>
                    <li><a href="conferences.php" class="menu__activeLinkDocs">Конференции</a></li>
                    <li><a href="good_links.php">Полезные ссылки</a></li>
                </ul>
            </div>
            <div class="col-md-10 main__docs ">
                <div class="docs__subtitle">
                    <p>
                            II Межрегиональная научно-практическая конференция 
                            <br>«ПРОФЕССИОНАЛЬНОЕ ОБРАЗОВАНИЕ ЛИЦ С ИНВАЛИДНОСТЬЮ И ОВЗ 
                            <br> (презентация опыта и лучших практик)», 2 ноября 2018 г.
                    </p>
                </div>
                 <!-- doc1 -->
                 <div class="docs__doc doc__small">
                    <div class="doc__info">
                        <img src="assets/img/pdfIcon.png" alt="" class="doc__logo">
                        <p class="doc__link"><a href="/assets/docs/Polozenie_konfere_2noyabry_2018.pdf">Смотреть положение о конференции</a></p>
                    </div>
                </div>
                <!-- doc1 -->
                <!-- doc2 -->
                <div class="docs__doc doc__small">
                    <div class="doc__info">
                        <img src="assets/img/pdfIcon.png" alt="" class="doc__logo">
                        <p class="doc__link"><a href="/assets/docs/Post_reliz_2018.pdf">Пост релиз</a></p>
                    </div>
                </div>
                <!-- doc2 -->
                <!-- doc3 -->
                <div class="docs__doc doc__small">
                    <div class="doc__info">
                        <img src="assets/img/pdfIcon.png" alt="" class="doc__logo">
                        <p class="doc__link"><a href="/assets/docs//Programma_konferencii_2018.pdf">Программа конференции</a></p>
                    </div>
                </div>
                <!-- doc3 -->
                <!-- doc4 -->
                <div class="docs__doc doc__small">
                    <div class="doc__info">
                        <img src="assets/img/pdfIcon.png" alt="" class="doc__logo">
                        <p class="doc__link"><a href="/assets/docs/Sbornik_2018.PDF">Сборник конференции</a></p>
                    </div>
                </div>
                <!-- doc4 -->
                <!-- largeDoc1 -->
                <div class="docs__doc doc__large">
                    <div class="doc__largeInfo">
                        <img src="assets/img/nout.png" alt="pd" class="doc__logo">
                        <p class="doc__link">
                            <a href="https://www.youtube.com/watch?v=Lg-yidC8XS0">
                            Проведение занятия по учебной практике по ПМ01 «Ввод и обработка цифровой информации» по профессии 09.01.03 «Мастер по обработке цифровой информации» с применением специальных технических средств в обучении студентов с инвалидностью и с ОВЗ. 
                            <br>
                                <i>Преподаватель: Кондратьева И.С.</i>
                            </a>
                        </p>
                    </div>
                </div>
                <!-- largeDoc1 -->
                <!-- largeDoc2 -->
                <div class="docs__doc doc__large">
                    <div class="doc__largeInfo">
                        <img src="assets/img/nout.png" alt="pd" class="doc__logo">
                        <p class="doc__link">
                            <a href="https://www.youtube.com/watch?v=7khvlMrcCjk">
                                Проведение занятия по дисциплине «Физическая культура» с применением средств и методов коррекции и компенсации недостатков в физическом и психическом развитии студентов с инвалидностью и с ОВЗ.                            
                                <br>
                                <i>Преподаватель: Малашенко А.В.</i>
                            </a>
                        </p>
                    </div>
                </div>
                <!-- largeDoc2 -->
                <!-- largeDoc3 -->
                <div class="docs__doc doc__large">
                    <div class="doc__largeInfo">
                        <img src="assets/img/nout.png" alt="pd" class="doc__logo">
                        <p class="doc__link">
                            <a href="https://www.youtube.com/watch?v=zINNImo76OA">
                                Мастер-класс «Использование элементов арт-терапии в психолого-педагогическом сопровождении студентов с инвалидностью и с ОВЗ (на примере песочной терапии)»
                                <br>
                                <i>Оплачко Н.Н.. педагог-психолог</i>
                            </a>
                        </p>
                    </div>
                </div>
                <!-- largeDoc3 -->
                <!-- largeDoc4 -->
                <div class="docs__doc doc__large">
                    <div class="doc__largeInfo">
                        <img src="assets/img/nout.png" alt="pd" class="doc__logo">
                        <p class="doc__link">
                            <a href="https://www.youtube.com/watch?v=3R59WifEkyY">
                                Особенности применения специальных технических средств на учебных занятиях для студентов с инвалидностью и с ОВЗ различной нозологии 
                                <br>
                                <i>Преподаватель: Иринин Д.В.</i>
                            </a>
                        </p>
                    </div>
                </div>
                <!-- largeDoc4 -->
                <!-- largeDoc5 -->
                <div class="docs__doc doc__large">
                    <div class="doc__largeInfo">
                        <img src="assets/img/nout.png" alt="pd" class="doc__logo">
                        <p class="doc__link">
                            <a href="https://www.youtube.com/watch?v=HnLhZj3Ryd0">
                            Проведение фрагмента занятия по дисциплине «Основы проектирования баз данных» по специальности 09.02.04 «Информационные системы (по отраслям)» с применением дистанционных образовательных технологий в обучении студентов с ОВЗ для создания условий удаленного доступа. 
                                <br>
                                <i>Преподаватель: Кондурар Н.Н.</i>
                            </a>
                        </p>
                    </div>
                </div>
                <!-- largeDoc5 -->
                
            </div>
            <div class="col-md-12 conference__photos">
                <img src="assets/img/conferencePhoto1.png" alt="conference">
                <img src="assets/img/conferencePhoto2.png" alt="conference">
                <img src="assets/img/conferencePhoto3.png" alt="conference">
                <img src="assets/img/conferencePhoto4.png" alt="conference">
                <img src="assets/img/conferencePhoto5.png" alt="conference">
                <img src="assets/img/conferencePhoto6.png" alt="conference">
            </div>
            <div class="col-md-12 main__docs ">
                <div class="docs__subtitle2">
                    <p>
                        I Межрегиональная научно-практическая конференция 
                        <br> «ПРОФЕССИОНАЛЬНОЕ ОБРАЗОВАНИЕ ЛИЦ С ИНВАЛИДНОСТЬЮ И ОВЗ 
                        <br> (презентация опыта и лучших практик)» 23 марта 2018 г., г. Тольятти
                    </p>
                </div> 
                <!-- doc1 -->
                <div class="docs__doc doc__small2">
                    <div class="doc__info">
                        <img src="assets/img/pdfIcon.png" alt="" class="doc__logo">
                        <p class="doc__link"><a href="/assets/docs/Programma_konferencii.pdf">Смотреть программу конференции</a></p>
                    </div>
                </div>
                <!-- doc1 -->
                <!-- doc2 -->
                <div class="docs__doc doc__small2">
                    <div class="doc__info">
                        <img src="assets/img/pdfIcon.png" alt="" class="doc__logo">
                        <p class="doc__link"><a href="/assets/docs/Polozenie_konferencyi.pdf">Смотреть положение о конференции</a></p>
                    </div>
                </div>
                <!-- doc2 -->
                <!-- doc3 -->
                <div class="docs__doc doc__small2">
                    <div class="doc__info">
                        <img src="assets/img/pdfIcon.png" alt="" class="doc__logo">
                        <p class="doc__link"><a href="/assets/docs/Post_reliz_konf.pdf">Пост-релиз</a></p>
                    </div>
                </div>
                <!-- doc3 -->
                <!-- doc4 -->
                <div class="docs__doc doc__small2">
                    <div class="doc__info">
                        <img src="assets/img/power.png" alt="" class="doc__logo">
                        <p class="doc__link"><a href="/assets/docs/01_Diakova.pdf">Дьякова. Опыт организации обучения ОВЗ</a></p>
                    </div>
                </div>
                <!-- doc4 -->
                <!-- largeDoc1 -->
                <div class="docs__doc doc__large2">
                    <div class="doc__largeInfo">
                        <img src="assets/img/power.png" alt="pd" class="doc__logo">
                        <p class="doc__link">
                            <a href="/assets/docs/02_Ystimenko.pdf">
                            Устименко. Индивидуальный образовательный маршрут как средство индивидуализации и дифференциации в профессиональной подготовке студентов с нарушениями ОДА
                            </a>
                        </p>
                    </div>
                </div>
                <!-- largeDoc1 -->
                <!-- largeDoc2 -->
                <div class="docs__doc doc__large2">
                    <div class="doc__largeInfo">
                        <img src="assets/img/power.png" alt="pd" class="doc__logo">
                        <p class="doc__link">
                            <a href="/assets/docs/03_Emelyanova.pdf">
                            Емельянова. Особенности разработки учебно-методического обеспечения образовательной программы с учетом индивидуальных особенностей обучающихся с ОВЗ
                            </a>
                        </p>
                    </div>
                </div>
                <!-- largeDoc2 -->
                <!-- largeDoc3 -->
                <div class="docs__doc doc__large2">
                    <div class="doc__largeInfo">
                        <img src="assets/img/power.png" alt="pd" class="doc__logo">
                        <p class="doc__link">
                            <a href="/assets/docs/04_Morozova.pdf">
                            Морозова. Особенности организации лекционно-семинарских занятий со студентами с нарушением слуха в процессе изучения дисциплин профессионального цикла
                            </a>
                        </p>
                    </div>
                </div>
                <!-- largeDoc3 -->
                <!-- largeDoc4 -->
                <div class="docs__doc doc__large2">
                    <div class="doc__largeInfo">
                        <img src="assets/img/power.png" alt="pd" class="doc__logo">
                        <p class="doc__link">
                            <a href="/assets/docs/05_Starikova.pdf">
                            Старикова. Особенности организации и реализации учебной и производственной практики
                            </a>
                        </p>
                    </div>
                </div>
                <!-- largeDoc4 -->
                <!-- largeDoc5 -->
                <div class="docs__doc doc__large2">
                    <div class="doc__largeInfo">
                        <img src="assets/img/power.png" alt="pd" class="doc__logo">
                        <p class="doc__link">
                            <a href="/assets/docs/06_Gorbunova.pdf">
                            Горбунова. предпрофильная подготовка обучающихся 9-х классов – детей-инвалидов и детей с ОВЗ
                            </a>
                        </p>
                    </div>
                </div>
                <!-- largeDoc5 -->
                <!-- largeDoc6 -->
                <div class="docs__doc doc__large2">
                    <div class="doc__largeInfo">
                        <img src="assets/img/power.png" alt="pd" class="doc__logo">
                        <p class="doc__link">
                            <a href="/assets/docs/07_Nazarova.pdf">
                                Назарова. Проблемы социализации студентов-инвалидов и пути их решения
                            </a>
                        </p>
                    </div>
                </div>
                <!-- largeDoc6 -->
                <!-- largeDoc7 -->
                <div class="docs__doc doc__large2">
                    <div class="doc__largeInfo">
                        <img src="assets/img/power.png" alt="pd" class="doc__logo">
                        <p class="doc__link">
                            <a href="/assets/docs/08_Pecherskix.pdf">
                            Печерских. Содействие в трудоустройстве: от участия - до практического исполнения
                            </a>
                        </p>
                    </div>
                </div>
                <!-- largeDoc7 -->
                <!-- largeDoc8 -->
                <div class="docs__doc doc__large2">
                    <div class="doc__largeInfo">
                        <img src="assets/img/power.png" alt="pd" class="doc__logo">
                        <p class="doc__link">
                            <a href="/assets/docs/09_Gorolatova.pdf">
                            Горолатова. Организация образовательного пространства для инвалидов и лиц с ограниченными возможностями здоровья для получения профессионального образования в ГБПОУ «Тольяттинский социально-экономический колледж»
                            </a>
                        </p>
                    </div>
                </div>
                <!-- largeDoc8 -->
                <!-- largeDoc9 -->
                <div class="docs__doc doc__large2">
                    <div class="doc__largeInfo">
                        <img src="assets/img/power.png" alt="pd" class="doc__logo">
                        <p class="doc__link">
                            <a href="/assets/docs/10_Centr_zanyatosti.pdf">
                            Центр занятости. Рынок труда и программы центра занятости населения, применяемые для сопровождения граждан с ограниченными возможностями для успешного их трудоустройства
                            </a>
                        </p>
                    </div>
                </div>
                <!-- largeDoc9 -->
                <!-- doc2 -->
                <div class="docs__doc doc__small2">
                    <div class="doc__info">
                        <img src="assets/img/pdfIcon.png" alt="pdf" class="doc__logo">
                        <p class="doc__link"><a href="/assets/docs/Sbornik_konf_2017.pdf">СБОРНИК КОНФЕРЕНЦИИ</a></p>
                    </div>
                </div>
                <!-- doc2 -->
            </div>
            <div class="col-md-12 conference__photos2">
                <div class="photos__photo1">
                    <p>Пленарная часть</p>
                </div>
                <div class="photos__photo2">
                    <p>Круглый стол</p>
                </div>
                <div class="photos__photo3">
                    <p>Семинар практикум</p>
                </div>
                <div class="photos__photo4">
                    <p>Выставка</p>
                </div>
            </div>
            
        </div>
</div>
</main>
<!-- /main -->
<footer>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-4 footer__icons">
                <a href=""><img src="assets/img/vkontakte.png" alt="pic" class="icons__icon"></a>
                <a href=""><img src="assets/img/instagram.png" alt="pic" class="icons__icon"></a>            
                <a href=""><img src="assets/img/twitter.png" alt="pic" class="icons__icon"></a>
            </div>
            <div class="col-md-4 footer__logo">
                <a href="" class="footer__link">
                    <img src="assets/img/bpoo_logo.png" alt="logo" class="logo__footerLogo">
                    <p class="logo__text">Базовая профессиональная <br> образовательная организация <br> Самарской области</p>
                </a>
            </div>
            <div class="col-md-4 footer__feedback">
                <button><a href="">Напишите нам</a></button>
            </div>
        </div>
    </div>
</footer>

</body>
<!-- links -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
<!--  -->
</html>