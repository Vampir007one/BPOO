<?php
    $_GET['page'] = 'spec';
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
    <!--  -->
    <title>График приёмной комиссии</title>
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
            <div class="col-md-12 main__title">
                <p class="title__main tittle__abiturient">Список имеющихся специальностей</p>
            </div>
            <div class="col-md-12 main__table">
                <table>
                    <tr>
                        <th>№</th>
                        <th>Код</th>
                        <th>Именование</th>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>09.01.03</td>
                        <td><a href="master_of_processing.php">Мастер по обработке цифровой информации</a></td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>46.02.01</td>
                        <td><a href="">Документационное обеспечение управления и архивоведение</a></td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>09.02.07</td>
                        <td><a href="">Информационные системы и программирование</a></td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>-</td>
                        <td><a href="">Оператор диспетчерской (производственно-диспетчерской) службы</a></td>
                    </tr>
                </table>
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