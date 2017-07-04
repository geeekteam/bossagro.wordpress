<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package bossagro
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}


$journal_image = get_field('journal_image', 183);
$images = get_field('images', 183);
$banner = get_field('ban', 183);
$gismeteo = get_field('gismeteo', 183);

?>


<div class="sidebar">
    <div class="journal" style="background-image: url(<?=$journal_image;?>);">
        <a class="journal__button button button_green" href="#">Читать журнал</a>
    </div>
    <div class="sidebar-grid-images">
        <?php foreach ($images as $image):?>
            <div class="sidebar-grid-image">
                <a class="link-image" href="<?=$image['link']?>" target="_blank">
                    <img src="<?=$image['image'];?>">
                </a>
            </div>
        <?php endforeach;?>
    </div>
    <div class="sidebar-ban-wrapper">
        <img class="sidebar__ban" src="<?=$banner;?>">
    </div>
    <div class="sidebar-gismeteo">
        <?=$gismeteo;?>
    </div>
</div>