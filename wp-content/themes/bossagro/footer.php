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
                <li class="footer-menu__item"><a class="link-with-underline link-white" href="#">Главная</a></li>
                <li class="footer-menu__item"><a class="link-with-underline link-white" href="#">Новости</a></li>
                <li class="footer-menu__item"><a class="link-with-underline link-white" href="#">Клиенты</a></li>
                <li class="footer-menu__item"><a class="link-with-underline link-white" href="#">Рекламодатели</a></li>
            </ul>
            <ul class="footer-menu">
                <li class="footer-menu__item"><a class="link-with-underline link-white" href="#">Архив</a></li>
                <li class="footer-menu__item"><a class="link-with-underline link-white" href="#">Сельхоз техника</a></li>
                <li class="footer-menu__item"><a class="link-with-underline link-white" href="#">Справочник</a></li>
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
</div>

<?php
wp_enqueue_script('custom', get_template_directory_uri() . '/js/common.js');
wp_enqueue_script('vendor', get_template_directory_uri() . '/js/vendor.js');

wp_footer();
?>

</body>
</html>
