<?php
    switch ($_GET['page']) 
    {
        case 'spec':
            $activeLi = 'spec';
            break;
        case 'home':
            $activeLi = 'home';
            break;
        case 'abiturient':
            $activeLi = 'abiturient';
            break;
        case 'masterReceive':
            $activeLi = 'masterReceive';
            break;
        case 'docSupport':
            $activeLi = 'docSupport';
            break;
        case 'infoSystem':
            $activeLi = 'infoSystem';
            break;
        case 'controlRoom':
            $activeLi = 'controlRoom';
            break;
    }
?>
<ul>
    <li><a href="/index.php" <?php if($activeLi == 'index'){echo "class='menu__activeLink'";}?> >Главная</a></li>
    <li><a href="abiturient.php" <?php if($activeLi == 'abiturient'){echo "class='menu__activeLink'";}?> >График работы приёмной комиссии 2021</a></li>
    <li class="topmenu"><a href="specs.php" <?php if($activeLi == 'spec'){echo "class='menu__activeLink'";}?>>Специальности</a>
        <ul class="submenu">
            <li><a href="master_of_processing.php" <?php if($activeLi == 'masterReceive'){echo "class='menu__activeLink'";}?> >Мастер по обработке цифровой информации</a></li>
            <li><a href="documentation_support.php" <?php if($activeLi == 'docSupport'){echo "class='menu__activeLink'";}?> >Документационное обеспечение управления и архивоведение</a></li>
            <li><a href="information_system.php" <?php if($activeLi == 'infoSystem'){echo "class='menu__activeLink'";}?> >Информационные системы и программирование</a></li>
            <li><a href="control_room_operator.php" <?php if($activeLi == 'controlRoom'){echo "class='menu__activeLink'";}?> >Оператор диспетчерской (производственно-диспетчерской) службы</a></li>
        </ul>
    </li>
    <li class="topmenu"><a href="">Информация о БПОО</a>
        <ul class="submenu">
            <li><a href="" <?php if($activeLi == 'docs'){echo "class='menu__activeLink'";}?> >Документы</a></li>
            <li><a href="" <?php if($activeLi == 'localDocs'){echo "class='menu__activeLink'";}?> >Локальные документы</a></li>
            <li><a href="" <?php if($activeLi == 'materialTech'){echo "class='menu__activeLink'";}?> >Материально-техническое обеспечение обучающихся с ограниченными возможностями здоровья и инвалидностью</a></li>
            <li><a href="" <?php if($activeLi == 'lessonMetod'){echo "class='menu__activeLink'";}?> >Учебно-методическое обеспечение инклюзивного образования</a></li>
            <li><a href="" <?php if($activeLi == 'conferenses'){echo "class='menu__activeLink'";}?> >Конференции</a></li>
            <li><a href="" <?php if($activeLi == 'goodLink'){echo "class='menu__activeLink'";}?> >Полезные ссылки</a></li>
        </ul>
    </li>
    <li><a href="" <?php if($activeLi == 'news'){echo "class='menu__activeLink'";}?> >Новости</a></li>
    <li><a href="" <?php if($activeLi == 'contact'){echo "class='menu__activeLink'";}?> >Контакты</a></li>
    <li><a href="" <?php if($activeLi == 'forum'){echo "class='menu__activeLink'";}?> >Форум</a></li>
</ul>