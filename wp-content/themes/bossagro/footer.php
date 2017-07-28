<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package bossagro
 */

$contacts = get_field('contacts', 64);
$socials = get_field('socials', 64);
$footer_menu_1 = get_field('footer_menu_1', 64);
$footer_menu_2 = get_field('footer_menu_2', 64);

?>

<footer class="footer">
    <div class="container">
        <div class="footer__grid">
            <?php foreach ($contacts as $contact):?>
                <div class="footer-contacts">
                    <p class="footer__title">Контакты</p>
                    <p class="contacts__line">
                        <?=$contact['city'];?>
                    </p>
                    <p class="contacts__line"><?=$contact['street'];?></p>
                    <?php foreach ($contact['phones'] as $phone):?>
                        <p class="contacts__line">тел.: <a class="link-with-underline link-white mb7" href="tel:<?=$phone['phone'];?>"><?=$phone['phone'];?></a></p>
                    <?php endforeach;?>
                    <?php foreach ($contact['emails'] as $email):?>
                        <p class="contacts__line"><a class="link-with-underline link-white" href="mailto:<?=$email['email'];?>"><?=$email['email'];?></a></p>
                    <?php endforeach;?>
                </div>
            <?php endforeach;?>
            <?php foreach ($socials as $social):?>
                <div class="footer-social">
                    <p class="footer__title text-center">Подписка на соц. сети</p>
                    <div class="d-flex">
                        <?php if ($social['facebook']):?>
                            <span class="social-wrapper"><a class="link-image" href="<?=$social['facebook'];?>" target="_blank"><i class="fri fri-facebook"></i></a></span>
                        <?php endif;?>
                        <?php if ($social['twitter']):?>
                            <span class="social-wrapper"><a class="link-image" href="<?=$social['twitter'];?>" target="_blank"><i class="fri fri-twitter"></i></a></span>
                        <?php endif;?>
                        <?php if ($social['google']):?>
                            <span class="social-wrapper"><a class="link-image" href="<?=$social['google'];?>" target="_blank"><i class="fri fri-google"></i></a></span>
                        <?php endif;?>
                        <?php if ($social['vkontakte']):?>
                            <span class="social-wrapper"><a class="link-image" href="<?=$social['vkontakte'];?>" target="_blank"><i class="fri fri-vk"></i></a></span>
                        <?php endif;?>
                        <?php if ($social['my_world']):?>
                            <span class="social-wrapper"><a class="link-image" href="<?=$social['my_world'];?>"><i class="fri fri-email"></i></a></span>
                        <?php endif;?>
                    </div>
                </div>
            <?php endforeach;?>
            <ul class="footer-menu">
                <?php foreach ($footer_menu_1 as $items):?>
                    <li class="footer-menu__item"><a class="link-with-underline link-white" href="<?=$items['menu_link'];?>"><?=$items['menu_item'];?></a></li>
                <?php endforeach;?>
            </ul>

            <ul class="footer-menu">
                <?php foreach ($footer_menu_2 as $items):?>
                    <li class="footer-menu__item"><a class="link-with-underline link-white" href="<?=$items['menu_link'];?>"><?=$items['menu_item'];?></a></li>
                <?php endforeach;?>
            </ul>

        </div>
        <p class="text-center text-white">©Copyright</p>
    </div>
</footer>

<div class="mobile-menu-modal js-popup" data-popup="mobile-menu">
    <div class="mobile-menu-wrapper">
        <div class="mobile-menu__close js-close-popup"></div>
        <?php $main_menu = buildTree(wp_get_nav_menu_items('main_menu'));?>
        <ul class="mobile-menu">
            <?php foreach ($main_menu as $item) :?>
                <li class="mobile-menu__item">
                    <a class="mobile-menu__item-link link-without-underline link-dark <?php if($item->sub) echo 'mobile-menu__item_dropdown'; ?>" href="<?=$item->url; ?>"> <?=$item->title;?></a>
                    <?php if($item->sub) :?>
                        <ul class="mobile-menu__submenu mobile-submenu">
                            <?php foreach ($item->sub as $sub_item) :?>
                                <li class="mobile-submenu__item">
                                    <a class="mobile-submenu__item-link link-without-underline link-dark" href="<?=$sub_item->url; ?>"><?=$sub_item->title;?></a>
                                </li>
                            <?php endforeach;?>
                        </ul>
                    <?php endif;?>
                </li>
            <?php endforeach; unset($main_menu)?>
        </ul>
    </div>
</div>

<div class="popup-wrapper js-popup" data-popup="call-me-manager">
    <div class="call-me">
        <div class="popup__close popup__close_red js-close-popup"></div>
        <div class="call-me__title">Заказать <span class="text-red">бесплатный</span> звонок</div>
        <form action="#" class="popup__form">
            <input class="input mb20" type="text" placeholder="Ваше имя">
            <input class="input mb20" type="text" placeholder="Ваш телефон">
            <p class="text-center">
                <button class="button button_green button_send" type="submit">Отправить</button>
            </p>
        </form>
    </div>
</div>


<?php
wp_enqueue_script('custom', get_template_directory_uri() . '/js/custom.js', true);
wp_enqueue_script('vendor', get_template_directory_uri() . '/js/vendor.js');

wp_footer();
?>

</div>
</body>
</html>
