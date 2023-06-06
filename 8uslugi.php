<?php
require('vivod.php');

// Вывод из бд
$ts = Query::GetTovar();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Фотоцентр авторизация</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Amatic+SC:wght@400;700&family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="wrapper">
        <header class="header">
            <div class="conteiner">
                <div class="header__inner">
                    <nav class="menu">
                        <ul class="menu__list">
                            <li class="menu__list-item1">
                                <a href="5mestop.html" class="menu__list-link">
                                    <img src="img/header/geo.png" alt="">
                                </a>
                            </li>
                            <li class="menu__list-item1">
                                <a href="5mestop.html" class="menu__list-link">ФОТОЦЕНТРЫ</a>
                            </li>
                            <li class="menu__list-item1">
                                <a href="5mestop.html" class="menu__list-link">ВЕЛИКИЙ НОВГОРОД</a>
                            </li>
                        </ul>       
                    </nav>
                    <nav class="menu1">
                        <ul class="menu__list1">
                            <li class="menu__list-item2">
                                <a href="8uslugi.php" class="menu__list-link"><u>УСЛУГИ</u></a>
                            </li>
                            <li class="menu__list-item2">
                                <a href="index.html" class="menu__list-link">ГЛАВНАЯ</a>
                            </li>
                            <li class="menu__list-item2">
                                <a href="7suvenir.php" class="menu__list-link">СУВЕНИРЫ</a>
                            </li>
                        </ul>
                    </nav>
                    <div class="search-box">
                        <form>
                            <input type="text" class="search-txt" required pattern="^[А-яа-я\s]+$" placeholder="Поиск">
                            <button class="search-btn"><img src="img/header/poisk.png" alt="?" ></button>
                        </form>
                    </div>
                    <nav class="menu2">
                        <ul class="menu__list2">
                            <li class="menu__list-item3">
                                <a href="2vhod.html" class="menu__list-link">
                                    <img src="img/header/prof.png" alt="">
                                </a>
                            </li>
                            <li class="menu__list-item3">
                                <a href="9korzina.html" class="menu__list-link">
                                    <img src="img/header/korzina.png" alt="">
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </header>

    <main class="main">
        <section class="contacts">
            <div class="conteiner">
                <h2 class="section-title tovar__title">УСЛУГИ</h2>
                <div class="conteiner__item">
                    <?php while($row = $ts->fetch_assoc()){
                        if ($row["Katalog_id"]==1){ ?>
                        <div class="item">
                        <div class="image">
                            <img class="image__img" src="<?php echo $row["foto"]; ?>" width="372" height="372">
                        </div>
                            <p class="tovat__text"><?= $row["name"]; ?></p>
                            <div class="text">    
                                <p class="tovar__cena"><?= $row["cena"]; ?></p>
                                <p class="tovar__cena-zn"> ₽ шт</p>
                            </div>
                            <button class="tovar__btn" type="submit">КУПИТЬ</button>
                        </div>
                    <?php }} ?>    
                </div>            
            </div>
        </section>
    </main>

    <footer class="footer conteiner">
        <div class="footer__nav">
            <nav class="footer__menu">
                <ul class="footer__menu-list">
                        <li class="footer__menu-item">
                            <a href="3o_kompanii.html" class="footer__menu-link">О КОМПАНИИ</a>
                        </li>
                        <li class="footer__menu-item">
                            <a href="5mestop.html" class="footer__menu-link">ФОТОЦЕНТРЫ</a>
                        </li>
                        <li class="footer__menu-item">
                            <a href="#" class="footer__menu-link">РАБОТА У НАС</a>
                        </li>
                        <li class="footer__menu-item">
                            <a href="4n_contact.html" class="footer__menu-link">КОНТАКТЫ</a>
                        </li>
                </ul>
            </nav>
        </div>
        <div class="footer__soc_sety">
            <a href="https://t.me/+vv52UKj-DUM2NTFi"><img src="img/footer/tg.png" alt=""></a>
            <a href="https://www.tiktok.com/@spektr.photocentr?is_from_webapp=1&sender_device=pc"><img src="img/footer/tik.png" alt=""></a>
            <a href="https://vk.com/norfoto"><img src="img/footer/vk.png" alt=""></a>
        </div>
    </footer>
    </div>
</body>
</html>