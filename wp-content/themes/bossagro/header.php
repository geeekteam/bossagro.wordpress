<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package bossagro
 */

$main_menu = buildTree(wp_get_nav_menu_items('main_menu'));

$logo = get_field('logo', 11);
$logo_small = get_field('logo_small', 11);
$slider_1 = get_field('slider_1', 11);
$slider_2 = get_field('slider_2', 11);
$slider_3 = get_field('slider_3', 11);
$slider_4 = get_field('slider_4', 11);
$timeout_1 = get_field('timeout_1', 11);
$timeout_2 = get_field('timeout_2', 11);
$timeout_3 = get_field('timeout_3', 11);
$timeout_4 = get_field('Timeout_4', 11);

//if ($header_elems):
//    foreach($header_elems as $header_elem):

?>

<!doctype html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">

<?php wp_head(); ?>
</head>

<div class="site-wrapper">

    <header class="header">
        <div class="header_bg-left"></div>
        <div class="header__top">
            <div class="container">
                <div class="header-grid">
                    <div class="header-logo-wrapper">
                        <a class="link-image" href="/">
                            <img class="logo-image" src="<?=$logo?>">
                            <img class="small-logo" src="<?=$logo_small;?>">
                        </a>
                    </div>
                    <div class="header_bg-right jq-header-animate">

                        <div class="header-right jq-header-right" data-timeout="<?=$timeout_1;?>">
                            <?php if ($slider_4): ?>
                                <?php foreach ($slider_4 as $image):?>
                                    <img class="header__image active" src="<?=$image['image'];?>" alt="">
                                <?php endforeach; ?>
                            <?php endif; ?>
                        </div>

                        <div class="header-right jq-header-right" data-timeout="<?=$timeout_2;?>">
                            <?php if ($slider_3): ?>
                                <?php foreach ($slider_3 as $image):?>
                                    <img class="header__image active" src="<?=$image['image'];?>" alt="">
                                <?php endforeach; ?>
                            <?php endif; ?>
                        </div>

                        <div class="header-right jq-header-right" data-timeout="<?=$timeout_3;?>">
                            <?php if ($slider_2): ?>
                                <?php foreach ($slider_2 as $image):?>
                                    <img class="header__image active" src="<?=$image['image'];?>" alt="">
                                <?php endforeach; ?>
                            <?php endif; ?>
                        </div>

                        <div class="header-right jq-header-right" data-timeout="<?=$timeout_4;?>">
                            <?php if ($slider_1): ?>
                                <?php foreach ($slider_1 as $image):?>
                                    <img class="header__image active" src="<?=$image['image'];?>" alt="">
                                <?php endforeach; ?>
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="hamburger-button-wrapper">
                        <div class="button-hamburger js-open-popup" data-open-popup="mobile-menu">
                            <span class="button-hamburger__line"></span>
                            <span class="button-hamburger__line"></span>
                            <span class="button-hamburger__line"></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="header__bottom">
            <div class="container">
                <div class="header-menu-wrapper">
                    <ul class="main-menu">
                        <?php foreach ($main_menu as $item) :?>
                            <li class="main-menu__item
                                <?php
                                if(($item->sub)&&($item->post_title == 'Журнал "Агро-Босс"'))
                                    echo 'main-menu__item_dropdown-red';
                                elseif ($item->sub)
                                    echo 'main-menu__item_dropdown';
                                ?>">
                                <a class="main-menu__item-link link-without-underline
                                <?php
                                    if($item->post_title == 'Журнал "Агро-Босс"')
                                        echo 'link-red';
                                    else
                                        echo 'link-white';
                                ?>" href="<?=$item->url; ?>"><?=$item->title;?></a>
                                <?php if($item->sub) :?>
                                <ul class="main-menu__submenu submenu">
                                    <?php foreach ($item->sub as $sub_item) :?>
                                        <li class="submenu__item">
                                            <a class="submenu__item-link link-without-underline link-white" href="<?=$sub_item->url; ?>"><?=$sub_item->title;?></a>
                                        </li>
                                    <?php endforeach;?>
                                </ul>
                                <?php endif;?>
                            </li>
                        <?php endforeach; unset($main_menu)?>
                        <li class="search-wrapper"><?php get_search_form(); ?></li>
                    </ul>
                </div>
            </div>
        </div>
    </header>