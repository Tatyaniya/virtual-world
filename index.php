<?php
/*
Template Name: Главная
Template Post Type: post, page, product
*/
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="Виртуальная реальность">
    <meta name="keywords" content="игры напрокат, игры PS4, Игры PS VR, PlayStation, низкие цены, PlayStation 4 и VR">
    <link rel="icon" href="<?php bloginfo('template_directory') ?>/img/favicon.png" type="image/x-icon">
    <link rel="shortcut icon" href="<?php bloginfo('template_directory') ?>/img/favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/css/fonts.css">
    <link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/css/jquery.arcticmodal-0.3.css">
	<?php wp_head() ?>
</head>
<body>
    <div class="wrapper">
        <div class="container">
            <header class="header" id="header">
                <nav class="nav header__nav">
                    <div class="hamburger">
                        <svg class="ham hamRotate ham4" viewBox="0 0 100 100" width="80" onclick="this.classList.toggle('active')">
                            <path
                                class="line top"
                                d="m 70,33 h -40 c 0,0 -8.5,-0.149796 -8.5,8.5 0,8.649796 8.5,8.5 8.5,8.5 h 20 v -20" />
                            <path
                                class="line middle"
                                d="m 70,50 h -40" />
                            <path
                                class="line bottom"
                                d="m 30,67 h 40 c 0,0 8.5,0.149796 8.5,-8.5 0,-8.649796 -8.5,-8.5 -8.5,-8.5 h -20 v 20" />
                        </svg>
                    </div>
                    <ul class="nav__list nav-closed">
                        <li class="nav__item">
                            <a href="#header" class="nav__link">
                                Главная
                            </a>
                        </li>
                        <li class="nav__item">
                            <a href="#cost" class="nav__link">
                                Сколько стоит?
                            </a>
                        </li>
                        <li class="nav__item">
                            <a href="#kit" class="nav__link">
                                Что в комплекте?
                            </a>
                        </li>
                        <li class="nav__item nav__item_drop">
                            <a href="#one" class="nav__link">
                                Игры PS4 
                            </a>
                            <ul class="drop-down">
                                <li class="drop-down__item">
                                    <a href="#one" class="drop-down__link">
                                        Игры для одного
                                    </a>
                                </li>
                                <li class="drop-down__item">
                                    <a href="#two" class="drop-down__link">
                                        Игры для двоих
                                    </a>
                                </li>
                                <li class="drop-down__item">
                                    <a href="#four" class="drop-down__link">
                                        Игры для двух-четырёх
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav__item">
                            <a href="#vr" class="nav__link">
                                Игры PS VR
                            </a>
                        </li>
                        <li class="nav__item">
                            <a href="#delivery" class="nav__link">
                                Доставка
                            </a>
                        </li>
                        <li class="nav__item">
                            <a href="#contacts" class="nav__link">
                                Контакты
                            </a>
                        </li>
                    </ul>
                </nav>
                <div class="social header__social">
                    <a href="#" class="social__link"></a>
                </div>
                <div class="offer">
                    <h1 class="offer__title">
                        Погрузись в чудесный виртуальный мир с помощью PlayStation 4 и VR
                    </h1>
                    <p class="offer__text">
                        Расширь грань своих возможностей с арендой консоли от PlayStation
                    </p>
                    <a href="#" class="rent-now offer__btn">
                        Арендовать сейчас
                    </a>
                </div>
            </header>
            <section class="we">
                <h2 class="we__title" id="we">
                    Мы и только Мы
                </h2>
                <ul class="we__list">
                    <li class="we__item">
                        <div class="we__icon we__icon_1">
                            <img src="<?php bloginfo('template_directory') ?>/img/icon1.png" alt="nice bonuses" class="we__img">
                        </div>
                        <p class="we__text">
                            Приятные бонусы
                        </p>
                    </li>
                    <li class="we__item">
                        <div class="we__icon we__icon_2">
                            <img src="<?php bloginfo('template_directory') ?>/img/icon2.png" alt="low prices" class="we__img">
                        </div>
                        <p class="we__text">
                            Низкие цены
                        </p>
                    </li>
                    <li class="we__item">
                        <div class="we__icon we__icon_3">
                            <img src="<?php bloginfo('template_directory') ?>/img/icon3.png" alt="best games" class="we__img">
                        </div>
                        <p class="we__text">
                            Лучшие игры
                        </p>
                    </li>
                    <li class="we__item">
                        <div class="we__icon we__icon_4">
                            <img src="<?php bloginfo('template_directory') ?>/img/icon4.png" alt="fast delivery" class="we__img">
                        </div>
                        <p class="we__text">
                            Быстрая доставка
                        </p>
                    </li>
                </ul>
            </section>
            <section class="cost" id="cost">
                <h2 class="cost__title">
                    Сколько стоит?
                </h2>
                <ul class="cost__list">
                    <li class="cost__item">
                        <h3 class="cost__subtitle">
                            Sony Playstation 4
                        </h3>
                        <div class="cost__img">
                            <img src="<?php bloginfo('template_directory') ?>/img/sp4.png" alt="Sony Playstation 4" class="cost__icon">
                        </div>
                        <ul class="prices">
                            <li class="prices__item">
                                <?php the_field('1-sp-4'); ?>
                            </li>
                            <li class="prices__item">
                                <?php the_field('2-sp-4'); ?>
                            </li>
                            <li class="prices__item">
                                <?php the_field('3-sp-4'); ?>
                            </li>
                            <li class="prices__item">
                                <?php the_field('7-sp-4'); ?>
                            </li>
                            <li class="prices__item">
                                <?php the_field('10-sp-4'); ?>
                            </li>
                        </ul>
                        <a href="#" class="rent-now cost__btn">
                            Арендовать сейчас
                        </a>
                    </li>
                    <li class="cost__item">
                        <h3 class="cost__subtitle">
                            Sony Playstation 4 и VR
                        </h3>
                        <div class="cost__img">
                            <img src="<?php bloginfo('template_directory') ?>/img/sp4vr.png" alt="Sony Playstation 4 и VR" class="cost__icon">
                        </div>
                        <ul class="prices">
                            <li class="prices__item">
                                <?php the_field('1-sp-4-vr'); ?>
                            </li>
                            <li class="prices__item">
                                <?php the_field('2-sp-4-vr'); ?>
                            </li>
                            <li class="prices__item">
                                <?php the_field('3-sp-4-vr'); ?>
                            </li>
                            <li class="prices__item">
                                <?php the_field('7-sp-4-vr'); ?>
                            </li>
                            <li class="prices__item">
                                <?php the_field('10-sp-4-vr'); ?>
                            </li>
                        </ul>
                        <a href="#" class="rent-now cost__btn">
                            Арендовать сейчас
                        </a>
                    </li>
                    <li class="cost__item">
                        <h3 class="cost__subtitle">
                            Sony Playstation VR
                        </h3>
                        <div class="cost__img">
                            <img src="<?php bloginfo('template_directory') ?>/img/spVR.png" alt="Sony Playstation VR" class="cost__icon">
                        </div>
                        <ul class="prices">
                            <li class="prices__item">
                                <?php the_field('1-sp-vr'); ?>
                            </li>
                            <li class="prices__item">
                                <?php the_field('2-sp-vr'); ?>
                            </li>
                            <li class="prices__item">
                                <?php the_field('3-sp-vr'); ?>
                            </li>
                            <li class="prices__item">
                                <?php the_field('7-sp-vr'); ?>
                            </li>
                            <li class="prices__item">
                                <?php the_field('10-sp-vr'); ?>
                            </li>
                        </ul>
                        <a href="#" class="rent-now cost__btn">
                            Арендовать сейчас
                        </a>
                    </li>
                </ul>
            </section>
            <section class="kit" id="kit">
                <h2 class="kit__title">
                    Что в комплекте?
                </h2>
                <ul class="kit__list">
                    <li class="kit__item">
                        <h3 class="kit__title">
                            Комплект PlayStation:
                        </h3>
                        <div class="kit__kit">
                            <div class="kit__img kit__img-b">
                                <img src="<?php bloginfo('template_directory') ?>/img/kit1.png" alt="foto" class="kit__foto">
                            </div>
                            <span class="kit__plus">
                                +
                            </span>
                            <div class="kit__img kit__img-b">
                                <img src="<?php bloginfo('template_directory') ?>/img/kit2.png" alt="foto" class="kit__foto">
                            </div>
                            <span class="kit__plus kit__plus_2">
                                +
                            </span>
                            <div class="kit__img kit__img-b">
                                <img src="<?php bloginfo('template_directory') ?>/img/godo.png" alt="foto" class="kit__foto">
                            </div>
                            <span class="kit__plus kit__plus_3">
                                +
                            </span>
                            <div class="kit__img kit__img-b">
                                <img src="<?php bloginfo('template_directory') ?>/img/kit3.png" alt="foto" class="kit__foto">
                            </div>
                            <span class="kit__plus kit__plus_4">
                                +
                            </span>
                            <div class="kit__img kit__img-b">
                                <img src="<?php bloginfo('template_directory') ?>/img/kit4.png" alt="foto" class="kit__foto">
                            </div>
                        </div>
                    </li>
                    <li class="kit__item">
                        <h3 class="kit__title">
                            Комплект PlayStation VR:
                        </h3>
                        <div class="kit__kit">
                            <div class="kit__img">
                                <img src="<?php bloginfo('template_directory') ?>/img/kit5.png" alt="foto" class="kit__foto">
                            </div>
                            <span class="kit__plus">
                                +
                            </span>
                            <div class="kit__img">
                                <img src="<?php bloginfo('template_directory') ?>/img/kit6.png" alt="foto" class="kit__foto">
                            </div>
                            <span class="kit__plus kit__plus_2">
                                +
                            </span>
                            <div class="kit__img">
                                <img src="<?php bloginfo('template_directory') ?>/img/godo.png" alt="foto" class="kit__foto">
                            </div>
                            <span class="kit__plus kit__plus_3">
                                +
                            </span>
                            <div class="kit__img">
                                <img src="<?php bloginfo('template_directory') ?>/img/kit3.png" alt="foto" class="kit__foto">
                            </div>
                            <span class="kit__plus kit__plus_4">
                                +
                            </span>
                            <div class="kit__img">
                                <img src="<?php bloginfo('template_directory') ?>/img/kit4.png" alt="foto" class="kit__foto">
                            </div>
                        </div>
                    </li>
                    <li class="kit__item">
                        <h3 class="kit__title">
                            Комплект PlayStation 4 и VR:
                        </h3>
                        <div class="kit__kit kit__kit_last">
                            <div class="kit__img">
                                <img src="<?php bloginfo('template_directory') ?>/img/kit1.png" alt="foto" class="kit__foto">
                            </div>
                            <span class="kit__plus">
                                +
                            </span>
                            <div class="kit__img">
                                <img src="<?php bloginfo('template_directory') ?>/img/kit5.png" alt="foto" class="kit__foto">
                            </div>
                            <span class="kit__plus kit__plus_2">
                                +
                            </span>
                            <div class="kit__img">
                                <img src="<?php bloginfo('template_directory') ?>/img/godo.png" alt="foto" class="kit__foto">
                            </div>
                            <span class="kit__plus kit__plus_3">
                                +
                            </span>
                            <div class="kit__img">
                                <img src="<?php bloginfo('template_directory') ?>/img/kit3.png" alt="foto" class="kit__foto">
                            </div>
                            <span class="kit__plus kit__plus_4">
                                +
                            </span>
                            <div class="kit__img">
                                <img src="<?php bloginfo('template_directory') ?>/img/kit4.png" alt="foto" class="kit__foto">
                            </div>
                        </div>
                    </li>
                </ul>
            </section>
            <section class="games" id="one">
                <div class="games__part games-for-one">
                    <h2 class="games__title">
                        Игры для одного
                    </h2>
                    <ul class="games__list games__list_for-one">
                        <?php $pc = new WP_Query('cat=2&posts_per_page=150'); ?>
                            <?php while ($pc->have_posts()) : $pc->the_post(); ?>
                                <li class="games__item">
                                    <div class="games__content">
                                        <div class="games__img">
                                            <?php the_post_thumbnail(array(159,197), array("class" => "post_thumbnail", "alt" => get_the_title()));  ?>
                                        </div>
                                        <?php the_content(); ?>
                                    </div>
                                    <div class="games__subtitle">
                                        <?php the_title(); ?>
                                    </div>
                                </li>
                            <?php endwhile;
                        ?>
                    </ul>
                </div>
                <div class="games__part games-for-two" id="two">
                    <h2 class="games__title">
                        Игры для двоих
                    </h2>
                    <ul class="games__list games__list_for-two">
                        <?php $pc = new WP_Query('cat=3&posts_per_page=150'); ?>
                            <?php while ($pc->have_posts()) : $pc->the_post(); ?>
                                <li class="games__item">
                                    <div class="games__content">
                                        <div class="games__img">
                                            <?php the_post_thumbnail(array(159,197), array("class" => "post_thumbnail", "alt" => get_the_title()));  ?>
                                        </div>
                                        <?php the_content(); ?>
                                    </div>
                                    <div class="games__subtitle">
                                        <?php the_title(); ?>
                                    </div>
                                </li>
                            <?php endwhile;
                        ?>
                    </ul>
                </div>
                <div class="games__part games-for-four" id="four">
                    <h2 class="games__title">
                        Игры для двух-четырёх
                    </h2>
                    <ul class="games__list games__list_for-four">
                        <?php $pc = new WP_Query('cat=4&posts_per_page=150'); ?>
                            <?php while ($pc->have_posts()) : $pc->the_post(); ?>
                                <li class="games__item">
                                    <div class="games__content">
                                        <div class="games__img">
                                            <?php the_post_thumbnail(array(159,197), array("class" => "post_thumbnail", "alt" => get_the_title()));  ?>
                                        </div>
                                        <?php the_content(); ?>
                                    </div>
                                    <div class="games__subtitle">
                                        <?php the_title(); ?>
                                    </div>
                                </li>
                            <?php endwhile;
                        ?>
                    </ul>
                </div>
            </section>
            <section class="games games_free" id="vr">
                <h2 class="games__title">
                    Бесплатные игры для VR
                </h2>
                <ul class="games__list games__list_free">
                    <?php $pc = new WP_Query('cat=5&posts_per_page=150'); ?>
                        <?php while ($pc->have_posts()) : $pc->the_post(); ?>
                            <li class="games__item">
                                <div class="games__content games__content_free">
                                    <div class="games__img">
                                        <?php the_post_thumbnail(array(159,197), array("class" => "post_thumbnail", "alt" => get_the_title()));  ?>
                                    </div>
                                    <?php the_content(); ?>
                                </div>
                                <div class="games__subtitle">
                                    <?php the_title(); ?>
                                </div>
                            </li>
                        <?php endwhile;
                        wp_reset_postdata();
                    ?>
                </ul>
            </section>
            <section class="delivery" id="delivery">
                <h2 class="delivery__title">
                    Доставка
                </h2>
                <p class="delivery__text">
                    <?php the_field('delivery'); ?>
                </p>
                <p class="delivery__text">
                    <?php the_field('pickup'); ?>
                </p>
            </section>
            <section class="contacts" id="contacts">
                <h2 class="contacts__title">
                    Наши контакты
                </h2>
                <address class="contacts__text">
                    Адрес: г. Севастополь. Астана Кесаева, 10
                </address>
                <p class="contacts__text">
                    Все вопросы вы можете задать по единому номеру:  <?php the_field('tel'); ?>
                </p>

                <a href="#" class="rent-now contacts__btn">
                    Арендовать сейчас
                </a>
                <div class="map" id="map"></div>
            </section>
        </div>
    </div>
    <footer class="footer">
        <div class="container">
            <nav class="nav footer__nav">
                <a href="#header" class="up" alt="Наверх" title="Наверх">
                    &#8593;
                </a>
                <ul class="nav__list nav-closed">
                    <li class="nav__item">
                        <a href="#header" class="nav__link">
                            Главная
                        </a>
                    </li>
                    <li class="nav__item">
                        <a href="#cost" class="nav__link">
                            Сколько стоит?
                        </a>
                    </li>
                    <li class="nav__item">
                        <a href="#kit" class="nav__link">
                            Что в комплекте?
                        </a>
                    </li>
                    <li class="nav__item">
                        <a href="#one" class="nav__link">
                            Игры PS4
                        </a>
                    </li>
                    <li class="nav__item">
                        <a href="#vr" class="nav__link">
                            Игры PS VR
                        </a>
                    </li>
                    <li class="nav__item">
                        <a href="#delivery" class="nav__link">
                            Доставка
                        </a>
                    </li>
                    <li class="nav__item">
                        <a href="#contacts" class="nav__link">
                            Контакты
                        </a>
                    </li>
                </ul>
            </nav>
            <div class="social footer__social">
                <a href="#" class="social__link"></a>
            </div>
            <p class="footer__text">
                &#169; Все права защищены
            </p>
        </div>
    </footer>
    <div style="display: none;">
        <div class="box-modal" id="exampleModal">
            <div class="box-modal_close arcticmodal-close">x</div>
            <div class="box-modal__title">
                Заказать звонок
            </div>
            <?php echo do_shortcode('[contact-form-7 id="5" title="Заказ звонка"]'); ?>
            <!-- <input type="text" class="box-modal__input" name="name" placeholder="Введите имя">
            <input type="email" class="box-modal__input" name="email" placeholder="Введите E-mail" required>
            <input type="tel" class="box-modal__input" name="tel" placeholder="Введите телефон" required>
            <button type="submit" class="send box-modal__btn">
                Отправить заявку
            </button> -->
        </div>
	</div>
	<?php wp_footer(); ?>
    <script src="<?php bloginfo('template_directory') ?>/js/jquery-3.3.1.min.js"></script>
    <script src="https://api-maps.yandex.ru/2.1/?lang=ru_RU"></script>
    <script src="<?php bloginfo('template_directory') ?>/js/jquery.arcticmodal-0.3.min.js"></script>
	<script src="<?php bloginfo('template_directory') ?>/js/main.js"></script>
</body>
</html>