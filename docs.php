<?php
    $_GET['page'] = 'docs';
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
    <title>Документы</title>
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
                <p class="title__main tittle__abiturient">Документы</p>
            </div>
            <div class="col-md-2 main__docsMenu">
                <ul>
                    <li><a href="docs.php" class="menu__activeLinkDocs">Документы</a></li>
                    <li><a href="local_docs.php">Локальные документы</li>
                    <li><a href="logistics_support.php">Материально-техническое обеспечение обучающихся с ограниченными возможностями здоровья и инвалидностью</a></li>
                    <li><a href="educ_meth_support.php">Учебно-методическое обеспечение инклюзивного образования</a></li>
                    <li><a href="conferences.php">Конференции</a></li>
                    <li><a href="good_links.php">Полезные ссылки</a></li>
                </ul>
            </div>
            <div class="col-md-10 main__docs">
                <!-- doc1 -->
                <div class="docs__doc doc__large">
                    <div class="doc__largeInfo">
                        <img src="assets/img/pdfIcon.png" alt="" class="doc__logo">
                        <p class="doc__link"><a href="/assets/docs/644r 05.11.2015.pdf">Распоряжение Губернатора Самарской области от 05 ноября 2015 года № 644-р 
                            «Об утверждении Межведомственного комплексного плана мероприятий по организации инклюзивного образования и созданию специальных условий для получения 
                            профессионального образования инвалидами и лицами с ограниченными возможностями здоровья в Самарской области на 2015 - 2020 годы»
                            </a>
                        </p>
                    </div>
                </div>
                <!-- doc1 -->
                <!-- doc2 -->
                <div class="docs__doc doc__large">
                    <div class="doc__largeInfo">
                        <img src="assets/img/pdfIcon.png" alt="" class="doc__logo">
                        <p class="doc__link"><a href="/assets/docs/306r 05.06.2013.pdf">Распоряжение министерства образования и науки Самарской области от 
                            05 июня 2013 года № 306-р «Об утверждении Порядка передачи детям-инвалидам и инвалидам, обучавшимся на дому с использованием дистанционных образовательных технологий 
                            в образовательных учреждениях Самарской области, 
                            компьютерного оборудования для получения профессионального образования»
                            </a>
                        </p>
                    </div>
                </div>
                <!-- doc2 -->
                <!-- doc3 -->
                <div class="docs__doc doc__large">
                    <div class="doc__largeInfo">
                        <img src="assets/img/pdfIcon.png" alt="" class="doc__logo">
                        <p class="doc__link"><a href="/assets/docs/736r 11.11.2015.pdf">Распоряжение министерства образования и науки Самарской области от 11 ноября 2015 года № 736-р 
                            «О создании ресурсных учебно-методических центров по обучению лиц с ограниченными возможностями здоровья и инвалидов
                            на базе государственных профессиональных образовательных организаций Самарской области»
                            </a>
                        </p>
                    </div>
                </div>
                <!-- doc3 -->
                <!-- doc4 -->
                <div class="docs__doc doc__large">
                    <div class="doc__largeInfo">
                        <img src="assets/img/pdfIcon.png" alt="" class="doc__logo">
                        <p class="doc__link"><a href="/assets/docs/289ty 24.08.2016.pdf">Письмо министерства образования и науки 
                            Самарской области от 24 марта 2016 года № МО-16-09-01/289-ту 
                            (О работе Портала информационной и методической поддержки инклюзивного среднего профессионального образования инвалидов и лиц с ограниченными возможностями здоровья http://spo.wil.ru/ )
                            </a>
                        </p>
                    </div>
                </div>
                <!-- doc4 -->
                <!-- doc5 -->
                <div class="docs__doc doc__large">
                    <div class="doc__largeInfo">
                        <img src="assets/img/pdfIcon.png" alt="" class="doc__logo">
                        <p class="doc__link"><a href="/assets/docs/403r 30.05.2018.pdf">Распоряжение министерства образования и науки 
                            Самарской области от 30 мая 2018 года № 403-р «Об определении ГАПОУ СО «Тольяттинский социально-педагогический колледж» базовой профессиональной образовательной 
                            организацией, обеспечивающей поддержку региональной системы инклюзивного профессионального образования инвалидов»
                            </a>
                        </p>
                    </div>
                </div>
                <!-- doc5 -->
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